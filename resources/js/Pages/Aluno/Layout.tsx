import { ReactNode } from 'react'
import PerfilAluno from './Components/PerfilAluno'

export function AlunoLayout({ children }: { children: ReactNode }){
  return(
    <main className="inset-0 sm:hidden">
      <PerfilAluno />
      { children }
    </main>
  )
}
