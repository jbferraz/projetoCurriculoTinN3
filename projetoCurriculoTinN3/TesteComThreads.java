public class TesteComThreads {

    public int VariavelCompartilhada = 0;
    public int ValorDaVariavelCompartilhada = 0;
    
    public static void main(String[] args) {
        new TesteComThreads().executar();
    }

    public void executar() {
        Thread segundoThread = new ThreadQueDecrementaValorDaVariavel(this);
        segundoThread.start();
        while (true) {
            VariavelCompartilhada++;
            System.out.println("0 Variável vale: " + VariavelCompartilhada);
            dormir(1500);
        }
    }

    public void dormir(int milisegundos) {
        try {
            Thread.sleep(milisegundos);
        } catch (InterruptedException e) {
        }
    }

    class ThreadQueDecrementaValorDaVariavel extends Thread {

        private TesteComThreads teste;

        public ThreadQueDecrementaValorDaVariavel(TesteComThreads teste) {
            this.teste = teste;
        }

        @Override
        public void run() {
            while (true) {
                teste.ValorDaVariavelCompartilhada--;
                System.out.println("1 Variável vale: " + teste.ValorDaVariavelCompartilhada);
                teste.dormir(1000);
            }
        }
    }

}
