import { InputHTMLAttributes } from 'react';

export default function Checkbox({
    className = '',
    ...props
}: InputHTMLAttributes<HTMLInputElement>) {
    return (
        <input
            {...props}
            type="checkbox"
            className={
                'rounded border-gray-300 text-vermelho-600 shadow-sm focus:ring-vermelho-500 cursor-pointer' +
                className
            }
        />
    );
}
