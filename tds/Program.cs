using System;
class MainClass {
  public static void Main(string[] args) {
    float peso, altura, imc;
    string opc;
    opc = "s";
    while (opc == "s") {
      Console.WriteLine("**** Calculadora de IMC ****\n");
      Console.WriteLine("Digite seu peso: ");
      peso = float.Parse(Console.ReadLine());
      Console.WriteLine("Digite sua altura: ");
      altura = float.Parse(Console.ReadLine());
      imc = peso / (altura * altura);
      Console.WriteLine("Seu IMC é: " + imc);
      if (imc < 18.5) {
        Console.WriteLine("Peso abaixo do normal");
      } else if ((imc > 18.5) && (imc < 25)) {
        Console.WriteLine("Peso normal");
      } else if ((imc > 25) && (imc < 30)) {
        Console.WriteLine("Sobre o Peso");
      } else if ((imc > 30) && (imc < 35)) {
        Console.WriteLine("Grau de Obesidade I");
      } else if ((imc > 35) && (imc < 40)) {
        Console.WriteLine("Grau de Obesidade II");
      } else if (imc > 40) {
        Console.WriteLine("Obesidade Grau III");
      }
      Console.WriteLine("\nDeseja continuar? (s/n): ");
      opc = Console.ReadLine();
    }
  }
}
