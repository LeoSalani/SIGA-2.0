
import { usePage } from '@inertiajs/react';
import { PropsWithChildren, ReactNode, useState } from 'react';

import BottomTab from '@/Components/BottomTab';
import { Header } from '@/Components/Header';
import MenuContent from '@/Components/MenuContent';

export function AuthenticatedLayout({
    children,
}: PropsWithChildren<{ header?: ReactNode }>) {
    const user = usePage().props.auth.user;

    const [showingNavigationDropdown, setShowingNavigationDropdown] =
        useState(false);

    return (
      <div className="*:transition-colors bg-neutro-50 dark:bg-azul-950">
        <Header />

        <div className="inset-0 relative flex">
          <aside className="px-4 py-2 min-h-[90vh] max-w-72 border border-r-neutral-700 hidden md:block">
            <MenuContent />
          </aside>

          <main className="flex-1 pt-4 pl-2 min-h-[90vh]">
            { children }
          </main>

          <BottomTab />
        </div>
      </div>
    );
}

// <p>Aluno: </p>
//
