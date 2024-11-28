import { Link } from '@inertiajs/react';

import MenuContent from "./MenuContent";
import ToogleDarkMode from "./ToogleDarkMode";
import { Sheet, SheetClose, SheetContent, SheetDescription, SheetHeader, SheetTitle, SheetTrigger } from "./ui/sheet";

import { BsFillBackpack2Fill } from "react-icons/bs";
import { FaHome, } from 'react-icons/fa';
import { IoMenu } from "react-icons/io5";
import { LuMessagesSquare, LuUserSquare2 } from "react-icons/lu";

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

export default function MobileMenuLateral(){
  return(
    <section className="md:hidden">
      <Sheet>
        <SheetTrigger name="Abrir menu lateral">
          <IoMenu size={40} className="hover:text-neutral-700 transition-colors" />
        </SheetTrigger>
        <SheetContent>
          <SheetHeader>
            <SheetTitle>
              <h2 className="text-xl">Faculdade de Tecnologia</h2>
              {/* Caso aluno */}
              <p className="text-lg">Campus <b>{"Carapicuíba"}</b></p>
            </SheetTitle>
            <SheetDescription>
              <div className="w-full flex items-center justify-center">
                <ToogleDarkMode />
              </div>
              <section className="mt-4">
                <MenuContent />
                <nav className="flex xl:hidden flex-col gap-2 mt-4">
                  {links.map((link, index) => (
                    <SheetClose asChild>
                      <Link
                        key={index}
                        href={link.href}
                        className="flex gap-2 hover:underline hover:underline-offset-2"
                        >
                        {/* Como eu não sei como que fica no final, vou deixar assim */}
                        <link.icon size={22}/>
                        {link.titulo}
                      </Link>
                    </SheetClose>
                  ))}
                </nav>
              </section>
            </SheetDescription>
          </SheetHeader>
        </SheetContent>
      </Sheet>
    </section>
  )
}
