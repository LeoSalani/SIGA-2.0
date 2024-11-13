import { ButtonHTMLAttributes } from 'react';

export default function PrimaryButton({
    className = '',
    disabled,
    children,
    ...props
}: ButtonHTMLAttributes<HTMLButtonElement>) {
    return (
        <button
            {...props}
            className={
                `inline-flex items-center rounded-md border border-transparent bg-vermelho-800 px-4 py-2 text-xs font-bold uppercase tracking-widest text-white transition duration-300 ease-in-out hover:bg-vermelho-400 focus:bg-vermelho-400 focus:outline-none focus:ring-2 focus:ring-vermelho-500 focus:ring-offset-2 active:bg-vermelho-900 ${
                    disabled && 'opacity-25'
                } ` + className
            }
            disabled={disabled}
        >
            {children}
        </button>
    );
}
