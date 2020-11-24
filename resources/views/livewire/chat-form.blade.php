<div class="">

    <a href="/" style="color: black;">
        <h5 class="pb-0 mb-0"><strong>Chat En Vivo</strong></h5>
        
    </a>

    <!-- El Usuario -->
    <div class="form-group">
        <label for="usuario"><strong>Usuario</strong></label>
        <input 
            type="text" 
            wire:model="usuario" 
            class="form-control" 
            id="usuario">                
        
      
    </div>

    <!-- Mensaje de Chat a Enviar -->
    <div class="form-group">
        <label for="mensaje"><strong>Mensaje</strong></label>
        <input type="text" 
            wire:model="mensaje" 
            wire:keydown.enter="enviarMensaje"                         
            class="form-control" 
            id="mensaje">
        
        <!-- Validación -->
        @error("mensaje") 
            <small class="text-danger">{{ $message }}</small> 
        @else 
            <small class="text-muted">Escribe tu mensaje y teclea <code>ENTER</code> para enviarlo</small> 
        @enderror
    </div>
        
    <div wire:offline class="alert alert-danger text-center">
        <strong>Se ha perdido la conexión a Internet</strong>
    </div>
    
    <div class="row">
        <div class="col-6">
            <!-- Mensajes de alerta -->    
            <div style="position: absolute;"
            class="alert alert-success collapse" 
            role="alert" 
            id="avisoSuccess"       
            >Se ha enviado</div>        
        </div>    
        <div class="col-6 pt-2 text-right">
            <button 
                class="btn btn-primary" 
                wire:click="enviarMensaje"
                wire:click="limpiarMensaje"
                wire:loading.attr="disabled"
                wire:offline.attr="disabled"            
            >Enviar Mensaje</button>
        </div>        
    </div>
    
    <script>
                 
        // Esto lo recibimos en JS cuando lo emite el componente
        // El evento "enviadoOK"
        $( document ).ready(function() {
            window.livewire.on('enviadoOK', function () {
                $("#avisoSuccess").fadeIn("slow");                
                setTimeout(function(){ $("#avisoSuccess").fadeOut("slow"); }, 3000);                                
            });
        });
        
    </script>

</div>