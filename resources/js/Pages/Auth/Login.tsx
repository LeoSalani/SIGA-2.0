import Checkbox from '@/Components/Checkbox';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { useToast } from '@/hooks/use-toast';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head, Link, useForm } from '@inertiajs/react';
import { FormEventHandler } from 'react';

interface FormData {
  login: string
  senha: string
  remember: boolean
}

export default function Login({
    status,
    canResetPassword,
}: {
    status?: string;
    canResetPassword: boolean;
}) {

  const { toast } = useToast()
    const { data, setData, post, processing, errors, reset } = useForm<FormData>();

    const submit: FormEventHandler = (e) => {
        e.preventDefault();

        /**
         * TODO: Fazer login logo após
         * post(route('login'), {
            onFinish: () => reset('senha')
           });
         *
         */

        toast({
          title: "Título",
          description: "Descrição"
        })


    };

    return (
        <GuestLayout>
            <Head title="Login" />

            {status && (
                <div className="mb-4 text-sm font-medium text-green-600">
                    {status}
                </div>
            )}

            <form onSubmit={submit}>
                <div>
                    <InputLabel htmlFor="login" value="Login" />

                    <TextInput
                        id="login"
                        type="text"
                        name="login"
                        value={data.login}
                        className="mt-1 block w-full"
                        autoComplete="username"
                        isFocused={true}
                        onChange={(e) => setData('login', e.target.value)}
                    />

                    <InputError message={errors.login} className="mt-2" />
                </div>

                <div className="mt-4">
                    <InputLabel htmlFor="password" value="Senha" />

                    <TextInput
                        id="password"
                        type="password"
                        name="password"
                        value={data.senha}
                        className="mt-1 block w-full"
                        autoComplete="current-password"
                        onChange={(e) => setData('senha', e.target.value)}
                    />

                    <InputError message={errors.senha} className="mt-2" />
                </div>

                <div className="mt-4 block">
                    <label className="flex items-center">
                        <Checkbox
                            name="remember"
                            checked={data.remember}
                            onChange={(e) =>
                                setData('remember', e.target.checked)
                            }
                        />
                        <span className="ms-2 text-sm text-gray-600">
                            Lembrar-me
                        </span>
                    </label>
                </div>

                <div className="mt-4 flex items-center justify-end">
                    {canResetPassword && (
                        <Link
                            href={route('password.request')}
                            className="rounded-md text-sm text-neutro-600 underline hover:text-neutro-950 focus:outline-none focus:ring-2 focus:font-medium focus:ring-neutro-950 focus:ring-offset-2"
                        >
                            Esqueceu sua senha?
                        </Link>
                    )}

                    <PrimaryButton className="ms-4" disabled={processing}>
                        Entrar
                    </PrimaryButton>
                </div>
            </form>
        </GuestLayout>
    );
}
