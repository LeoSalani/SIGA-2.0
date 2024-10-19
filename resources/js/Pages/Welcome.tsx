import { AuthenticatedLayout } from '@/Layouts/AuthenticatedLayout';
import { PageProps } from '@/types';
import { Head } from '@inertiajs/react';

export default function Welcome({
    auth,
    laravelVersion,
    phpVersion,
}: PageProps<{ laravelVersion: string; phpVersion: string }>) {
    return (
      <>
        <Head title="Home" />
        <AuthenticatedLayout></AuthenticatedLayout>
      </>
    );
}
