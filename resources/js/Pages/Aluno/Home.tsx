import { AuthenticatedLayout } from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

import { CarrosselAvisos } from './Components/CarrosselAvisos';
import { AlunoLayout } from './Layout';

export default function Home() {
    return (
        <>
          <Head title="Home" />
          <AuthenticatedLayout>
            <AlunoLayout>
              <section>
                <h2>Mural de Avisos!</h2>

                <CarrosselAvisos />
              </section>
            </AlunoLayout>
          </AuthenticatedLayout>
        </>
    );
}
