import ApplicationLogo from '@/Components/ApplicationLogo';
import { PropsWithChildren } from 'react';

import { Toaster } from '@/Components/ui/toaster';

export default function Guest({ children }: PropsWithChildren) {
    return (
        <div className="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0">
            <div className="flex flex-col items-center">
              <div className="flex gap-1.5">
                  <ApplicationLogo w={189} h={85} />

                  <div className='w-px bg-black'/>

                  <h1 className="text-xl max-w-60 font-title">Sistema Integrado de Gestão Acadêmica</h1>
              </div>

              <div className="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
                  {children}
              </div>
            </div>

            <Toaster />
        </div>
    );
}
