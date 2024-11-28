import { ComponentProps } from "react";

import { LuMoon, LuSun } from "react-icons/lu";

export default function SwitchDarkMode(props: ComponentProps<'input'>){
  return(
    <label className="flex items-center w-16 h-8 rounded-full bg-neutro-100 dark:bg-azul-800 focus:outline-2 focus:outline-azul-900 border-0 cursor-pointer relative">
      <p className="sr-only">Alterar modo de visibilidade</p>
      <input type="checkbox" {...props} className="size-full invisible" />
      <span className={`size-6 flex items-center justify-center bg-neutro-200 dark:bg-azul-950 rounded-full absolute ${props.checked ? "translate-x-8" : "left-2"} transition-all`}>
        {
          props.checked ? (
            <LuMoon className="text-lg text-crayola leading-none" />
          ) : (
            <LuSun className="text-lg text-azul-700 leading-none" />
          )
        }
      </span>
    </label>
  )
}
