import { Link } from '@inertiajs/react';


import { BsFillBackpack2Fill } from "react-icons/bs";
import { FaHome, } from 'react-icons/fa';
import { LuMessagesSquare, LuUserSquare2 } from "react-icons/lu";
import PROFILE_PIC_PLACEHOLDER from '../../assets/images/placeholders/profile_pic_placeholder.jpg';

const links = [
  {
    icon: FaHome,
    href: "/inicio",
    titulo: "Início",
  },
  {
    icon: LuUserSquare2,
    href: "/perfil",
    titulo: "Dados Cadastrados",
  },
  {
    icon: LuMessagesSquare,
    href: "/chat",
    titulo: "Chat",
  },
  {
    icon: BsFillBackpack2Fill,
    href: "/materias",
    titulo: "Matérias",
  },
]

export default function MenuContent(){
  return(
    <>
    {/* Foto de Perfil */}
    <figure className="w-full">
      <img
        src={PROFILE_PIC_PLACEHOLDER}
        alt="Roronoa Zoro"
        className="size-40 rounded-full mx-auto"
      />
    </figure>

    {/* Aqui, as informações se diferenciarão se o usuário for aluno ou professor */}

    <hr className="w-full h-0.5 bg-neutral-700 mt-2" />

    <nav className="hidden xl:flex flex-col gap-2 mt-4">
      {links.map((link, index) => (
        <Link
          key={index}
          href={link.href}
          className="flex gap-2 hover:underline hover:underline-offset-2"
          >
          {/* Como eu não sei como que fica no final, vou deixar assim */}
          <link.icon size={22}/>
          {link.titulo}
        </Link>
      ))}
    </nav>


    </>
  )
}
