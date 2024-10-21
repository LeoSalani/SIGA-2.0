
import { usePage } from '@inertiajs/react';
import { PropsWithChildren, ReactNode } from 'react';

import BottomTab from '@/Components/BottomTab';
import { Header } from '@/Components/Header';
import MenuContent from '@/Components/MenuContent';
import { Toaster } from '@/Components/ui/toaster';

export function AuthenticatedLayout({
    children,
}: PropsWithChildren<{ header?: ReactNode }>) {
    const user = usePage().props.auth.user;


    return (
      <div className="relative *:transition-colors bg-neutro-50 dark:bg-azul-950">
        <Header />

        <div className="inset-0 flex">
          <aside className="px-4 py-2 min-h-[90vh] max-w-72 border border-r-neutral-700 hidden md:block">
            <MenuContent />
          </aside>

          <main className="flex-1 py-4 px-2 min-h-[90vh] max-w-[100vw] relative">
            { children }
          </main>

        </div>

        <BottomTab />

        <Toaster />
      </div>
    );
}
