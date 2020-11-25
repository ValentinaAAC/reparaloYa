<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Events\NuevoMensaje;

class ChatForm extends Component
{
    // Estas propiedades son publicas
    // y se pueden utilizar directamente desde la vista
    public $usuario;
    
    public $mensaje;
    
    
    
    protected $updatesQueryString = ['usuario'];   
    
    // Eventos Recibidos
    protected $listeners = ['solicitaUsuario'];

    // Cuando se Inicia el Componente (antes de Render)
    public function mount()
    {                
              

        // Obtenemos el valor de usuario de la barra de direcciones
        $this->usuario = request()->query('usuario', $this->usuario);                         

        
    }
    
       
    public function solicitaUsuario()
    {
        // Lo emitimos por evento
        $this->emit('cambioUsuario', $this->usuario);
    }

   
    public function updatedUsuario()
    {
       
        $this->emit('cambioUsuario', $this->usuario);
    }

   
    public function updated($field)
    {
        
        $validatedData = $this->validateOnly($field, [
            'usuario' => 'required',
            'mensaje' => 'required',
        ]);
    }

    public function enviarMensaje()
    {                
        $validatedData = $this->validate([
            'usuario' => 'required',
            'mensaje' => 'required',
        ]);

        // Guardamos el mensaje en la BBDD
        \App\Chat::create([
            "usuario" => $this->usuario,
            "mensaje" => $this->mensaje
        ]);
        
     
        
        event(new \App\Events\NuevoMensaje($this->usuario, $this->mensaje));
        
      
        $this->emit('enviadoOK', $this->mensaje);
        
    
    }    


    public function render()
    {
        return view('livewire.chat-form');
    }
}



