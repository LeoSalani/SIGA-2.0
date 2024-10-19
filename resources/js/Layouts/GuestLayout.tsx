import ApplicationLogo from '@/Components/ApplicationLogo';
import { PropsWithChildren } from 'react';

import { Toaster } from '@/Components/ui/toaster';

export default function Guest({ children }: PropsWithChildren) {
    return (
        <div className="flex min-h-screen flex-col items-center bg-gray-100 pt-10 px-4 sm:justify-center sm:pt-0">
            <main className="flex flex-col items-center">
              <section className="flex flex-col sm:flex-row items-center sm:items-start gap-1.5">
                  <ApplicationLogo w={189} h={85} />

                  <div className='w-px sm:h-20 bg-black'/>

                  <h1 className="text-xl text-center sm:text-left sm:max-w-60 font-title">Sistema Integrado de Gestão Acadêmica</h1>
              </section>

              <section className="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
                  {children}
              </section>
            </main>

            <Toaster />
        </div>
    );
}
