import { Tooltip, TooltipContent, TooltipProvider, TooltipTrigger } from "@/Components/ui/tooltip";

export default function HoverInfo({ text, description }: { text: string, description: string }){
  return(
    <TooltipProvider delayDuration={100}>
      <Tooltip>
        <TooltipTrigger>
          { text }
        </TooltipTrigger>
        <TooltipContent className="max-w-48 ml-4">
          <p>{ description }</p>
        </TooltipContent>
      </Tooltip>
    </TooltipProvider>
  )
}
