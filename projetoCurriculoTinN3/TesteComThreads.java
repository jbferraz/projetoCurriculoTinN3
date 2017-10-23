public class TesteComThreads {

    //Decrementa mais rápido que incrementa uma variável
            
    public int variavelCompartilhada = 0;
    
    public static void main(String[] args) {
        new TesteComThreads().executar();
    }

    public void executar() {
        Thread segundoThread = new ThreadQueDecrementaValorDaVariavel(this);
        segundoThread.start();
        while (true) {
            variavelCompartilhada++;
            System.out.println("+ Variável vale: " + variavelCompartilhada);
            dormir(1500);
        }
    }

    public void dormir(int milissegundos) {
        try {
            Thread.sleep(milissegundos);
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
                teste.variavelCompartilhada--;
                System.out.println("- Variável vale: " + teste.variavelCompartilhada);
                teste.dormir(1000);
            }
        }
    }

}
