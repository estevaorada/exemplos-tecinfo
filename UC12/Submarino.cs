using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BibliotecaSubmarino
{
    public class Submarino
    {
        /*
         * ATRIBUTOS PRIVADOS:
         */
        private bool _operacional;
        private readonly int _maxTripulantes;
        private int _maxResgatados;
        private int _qtdTripulantes;
        private int _qtdResgatados;
        private string _oceanoOrigem;
        private string _oceanoAtual;
        private double _nivelProfundidade; // Atributo para nível de profundidade (em metros)
        private static readonly string[] _oceanosValidos = { "Atlântico", "Pacífico", 
            "Índico", "Ártico", "Antártico" };

        /*
         * Propriedades:
         */
        public bool Operacional { get { return _operacional; } }
        public static string[] OceanosValidos 
        { 
            get 
            { 
                Array.Sort(_oceanosValidos); 
                return _oceanosValidos; 
            } 
        }
        public int QtdResgatados { get { return _qtdResgatados; } }
        public int QtdTripulantes { get { return _qtdTripulantes; } }
        public double NivelProfundidade { get { return _nivelProfundidade; } }
        public string OceanoAtual { get { return _oceanoAtual; } }
        public int MaxResgatados 
        { 
            get { return _maxResgatados; } 
            set { if (value >= _qtdResgatados) _maxResgatados = value; } 
        }

        /*
         * Construtor:
         */
        public Submarino(int maxTripulantes, int maxResgatados, string oceanoOrigem, double nivelProfundidade = 0.0)
        {
            _maxTripulantes = maxTripulantes;
            _maxResgatados = maxResgatados;
            _oceanoOrigem = oceanoOrigem;
            _operacional = false;
            _qtdResgatados = 0;
            _qtdTripulantes = 1; // Pelo menos um tripulante é necessário
            _oceanoAtual = oceanoOrigem;
            _nivelProfundidade = nivelProfundidade >= 0 ? nivelProfundidade : 0.0; // Inicializa na superfície
        }

        /*
         * Métodos:
         */
        public bool Ligar()
        {
            if (!_operacional)
            {
                _operacional = true;
                return true;
            }
            return false;
        }

        public bool Desligar()
        {
            if (_operacional)
            {
                _operacional = false;
                return true;
            }
            return false;
        }

        public bool AdicionarTripulante()
        {
            if ((_qtdTripulantes + 1) > _maxTripulantes)
            {
                return false;
            }
            _qtdTripulantes++;
            return true;
        }

        public bool RemoverTripulante()
        {
            if ((_qtdTripulantes - 1) < 1)
            {
                return false;
            }
            _qtdTripulantes--;
            return true;
        }

        public bool Resgatar()
        {
            if ((_qtdResgatados + 1) > _maxResgatados)
            {
                return false;
            }
            _qtdResgatados++;
            return true;
        }

        public bool LiberarResgatado()
        {
            if (_qtdResgatados <= 0)
            {
                return false;
            }
            _qtdResgatados--;
            return true;
        }

        public bool MudarOceano(string novoOceano)
        {
            if (_nivelProfundidade > 0)
            {
                return false; // Só pode mudar de oceano na superfície
            }
            if (_oceanosValidos.Contains(novoOceano))
            {
                _oceanoAtual = novoOceano;
                return true;
            }
            return false;
        }

        public bool RetornarAoOceanoOrigem()
        {
            if (_nivelProfundidade > 0 || _oceanoAtual == _oceanoOrigem)
            {
                return false;
            }
            _oceanoAtual = _oceanoOrigem;
            return true;
        }

        public bool AjustarProfundidade(double novaProfundidade)
        {
            if (novaProfundidade >= 0 && novaProfundidade <= 1000) // Limite de profundidade de 1000 metros
            {
                _nivelProfundidade = novaProfundidade;
                return true;
            }
            return false;
        }
    }
}
