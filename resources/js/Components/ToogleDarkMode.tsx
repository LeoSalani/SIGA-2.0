
import { useEffect, useState } from "react";

import SwitchDarkMode from "./SwitchDarkMode";


export default function ToogleDarkMode(){
  const [aparencia, setAparencia] = useState<'light' | 'dark'>('dark')
  useEffect(() => {
    const tema = localStorage.getItem("theme")

    if(tema === "light"){
      setAparencia("light")
    }
    else if(tema === "dark"){
      setAparencia("dark")
    }
    else {
      setAparencia("light")
    }
  }, [])

  useEffect(() => {
    if(aparencia === "dark"){
      document.documentElement.classList.add("dark")
      document.documentElement.classList.remove("light")
      localStorage.setItem("theme", "dark")
    } else {
      document.documentElement.classList.add("light")
      document.documentElement.classList.remove("dark")
      localStorage.setItem("theme", "light")
    }
  }, [aparencia])

  function mudaAparencia(){
    setAparencia(state => state === 'light' ? 'dark' : 'light')
  }

  return(
    <div className="flex items-center gap-2">
      {/* <FaSun size={20} /> */}
      <SwitchDarkMode id="toogle" onClick={mudaAparencia} checked={aparencia === 'dark'} />
      <label htmlFor="toogle" className="sr-only">Mudar aparência para o tema {aparencia === 'light' ? "claro" : "escuro"}</label>
      {/* <FaMoon size={20} /> */}
    </div>
  )
}
