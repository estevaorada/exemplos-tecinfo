using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySqlConnector;

namespace LojaBraba.Model
{
    public class Cliente
    {
        public int Id { get; set; }
        public string Nome { get; set; }
        public string Sobrenome {get; set;}
        public string CPF { get; set; }
        public string Email {  get; set; }
        public string Senha { get; set; }

        /* Exemplo de método DML utilizando INSERT */
        public bool Cadastrar()
        {
            string comando = "INSERT INTO clientes (nome, sobrenome, cpf, email, senha) " +
                "VALUES (@nome, @sobrenome, @cpf, @email, @senha)";
            Banco conexaoBD = new Banco();
            MySqlConnection con = conexaoBD.ObterConexao();
            MySqlCommand cmd = new MySqlCommand(comando, con);

            cmd.Parameters.AddWithValue("@nome", Nome);
            cmd.Parameters.AddWithValue("@sobrenome", Sobrenome);
            cmd.Parameters.AddWithValue("@cpf", CPF);
            cmd.Parameters.AddWithValue("@email", Email);
            cmd.Parameters.AddWithValue("@senha", Senha);
            // Obs.: Certifique-se de utilizar alguma método para obter o hash da senha antes de cadastrar!
            cmd.Prepare();
            // O trecho abaixo irá retornar true caso o cadastro dê certo:
            // Em caso de erro, experimente comentar o try/catch e executar novamente o código;
            // Grande parte dos problemas estão associados à um comando SQL incorreto. Verifique a string comando.
            try
            {
                if (cmd.ExecuteNonQuery() == 0)
                {
                    conexaoBD.Desconectar(con);
                    return false;
                }
                else
                {
                    conexaoBD.Desconectar(con);
                    return true;
                }
            }
            catch
            {
                conexaoBD.Desconectar(con);
                return false;
            }
        }

        /* Exemplo de método DQL utilizando SELECT */
        public DataTable Listar()
        {
            
            string comando = "SELECT id, nome, sobrenome, cpf, email FROM clientes";
            /*
            Caso vá utilizar o WHERE, empregue o uso de caracteres coringas,
            semelhante ao apresentado no metódo Cadastrar() acima.
            */
            Banco conexaoBD = new Banco();
            MySqlConnection con = conexaoBD.ObterConexao();
            MySqlCommand cmd = new MySqlCommand(comando, con);

            cmd.Prepare();
            // Declarar tabela que irá receber o resultado:
            DataTable tabela = new DataTable();
            // Preencher a tabela com o resultado da consulta
            tabela.Load(cmd.ExecuteReader());
            conexaoBD.Desconectar(con);
            return tabela;
        }

        /* Exemplo de método DML utilizando DELETE */
        public bool Remover()
        {
            // Observe que a estrutura é semelhante ao Cadastrar()
            string comando = "DELETE FROM clientes WHERE id = @id";
            Banco conexaoBD = new Banco();
            MySqlConnection con = conexaoBD.ObterConexao();
            MySqlCommand cmd = new MySqlCommand(comando, con);

            cmd.Parameters.AddWithValue("@id", Id);

            cmd.Prepare();
            try
            {
                if (cmd.ExecuteNonQuery() == 0)
                {
                    conexaoBD.Desconectar(con);
                    return false;
                }
                else
                {
                    conexaoBD.Desconectar(con);
                    return true;
                }
            }
            catch
            {
                conexaoBD.Desconectar(con);
                return false;
            }
        }
    }
}