import { Alert, AlertDescription, AlertTitle } from '@/Components/ui/alert';
import { AuthenticatedLayout } from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { IoAlert } from 'react-icons/io5';

export default function Home() {
    return (
        <>
          <Head title="Dashboard" />
          <AuthenticatedLayout>

          <h2 className="text-2xl">Bem vindo(a), <span className="font-medium">{"Gustavo Sales da Silva de Souza"}</span></h2>
            <section className="mt-2">
              <h2 className="text-xl">Status de matrícula: </h2>
              <ul>
                <li><p>RA: <span className="font-bold">{"1430482411000"}</span></p></li>
                <li><p>Cursos: <span className="font-bold">{"Análise e Desenvolvimento de Sistemas - Manhã"}</span><span className="text-green-500 font-bold">{" cursando"}</span></p></li>
                <li><p>Ciclo: <span className="font-bold">3</span></p></li>
              </ul>
            </section>
            <section className="mt-2">
              <h2 className="text-xl">Mural</h2>
              <p>Aqui ficariam os avisos mais importantes</p>
              <Alert>
                <IoAlert size={24} />
                <AlertTitle className="text-lg font-medium">Aulas assíncronas de 14 à 18 de Outubro</AlertTitle>
                <AlertDescription>
                  Devido a manutenção no reservatório de água do campus, as aulas presenciais estarão suspensas na próxima semana, por tanto, os professores deverão ministrar suas aulas de forma sincrona ou assíncrona.
                </AlertDescription>
              </Alert>
            </section>
          </AuthenticatedLayout>
        </>
    );
}
