import { useEffect, useState } from "react"

import { Carousel, CarouselContent, CarouselItem, type CarouselApi } from "@/Components/ui/carousel"

const avisos = [
  {
    id: 1,
    titulo: "Aulas assíncronas",
    data: "14/10/2024 - 18/10/2024",
    status: "importante",
    descricao: "Devido a manutenção no reservatório de água do campus, as aulas presenciais estarão suspensas na próxima semana, por tanto, os professores deverão ministrar suas aulas de forma síncrona ou assíncrona."
  },
  {
    id: 2,
    titulo: "Aulas assíncronas",
    data: "21/10/2024 e 22/10/2024",
    status: "importante",
    descricao: "Não foi possível concluir a manutenção na caixa d`água do campus dentro do conograma previsto. Então, as aulas ocorrerão de forma remota via plataforma Teams."
  },
]

export function CarrosselAvisos(){
  const [api, setApi] = useState<CarouselApi>()
  const [current, setCurrent] = useState(0)
  const [count, setCount] = useState(avisos.length)

  useEffect(() => {
    if (!api) {
      return
    }

    setCount(api.scrollSnapList().length)
    setCurrent(api.selectedScrollSnap() + 1)

    api.on("select", () => {
      setCurrent(api.selectedScrollSnap() + 1)
    })
  }, [api])

  return(
    <Carousel setApi={setApi}>
      <CarouselContent>
        {
          avisos.map(aviso => (
            <CarouselItem key={aviso.id}>
              {aviso.titulo}
            </CarouselItem>
          ))
        }
      </CarouselContent>
    </Carousel>
  )
}
