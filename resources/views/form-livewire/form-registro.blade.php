<div class="form">
   
    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif
      
    <div class="text-center">
        <!-- progressbar -->
        <ul class="progressbar">
            <li class="{{ $currentStep != 1 ? '' : 'active' }}"></li>
            <li class="{{ $currentStep != 2 ? '' : 'active' }}"></li>
            <li class="{{ $currentStep != 3 ? '' : 'active' }}"></li>
        </ul>
        
    </div>
    
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
                
                <div>
                    <p class="texto">Tu tienes una línea de crédito pre aprobada con nosotros, está línea de crédito se debe verificar por expertos, 
                        para ello te solicitaremos una serie de documentos que puedes ingresar en el momento de tu registro o más adelante.</p>
                    <p class="titulo-naranja">Llena tu registro para continuar</p>
                </div>

                <div class="col-1"></div>
                {{--Inicio de campos del Formulario --}}
                <div class="col-10">
                        <p class="titulo-rojo">Datos obligatorios (*)</p>
                        <!--Input Nombre-->
                        <input type="text" placeholder="* Nombre completo" class="form-control" wire:model="nombre">
                        @error('nombre') <span class="error">{{ $message }}</span> @enderror
                        <!--Input de CURP-->
                        <div class="row">
                            <div class="col-5">
                                <input type="text" placeholder="* CURP" class="form-control" wire:model="curp">
                                @error('curp') <span class="error">{{ $message }}</span> @enderror
                            </div>    
                            <div class="col-5 flex-right">
                                <a class="vinculo" href="https://www.gob.mx/curp/">¿No conoces tu CURP?</a>
                            </div>
                        </div>   
                        <!--Input Fecha de nacimiento-->
                        <div class="row">
                            <div class="col-6 flex-left">
                                * Fecha de nacimiento
                                </div>
                                <div class="col-6">
                                <input type="date" placeholder="" class="form-control" wire:model="fecha_nacimiento" name="fecha_nacimiento">
                                @error('fecha_nacimiento') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div> 
                    <!--Lugar de trabajo -->    
                    <input type="text" placeholder="* Empresa donde trabajas" class="form-control" wire:model="empresa_trabajo">
                    @error('empresa_trabajo') <span class="error">{{ $message }}</span> @enderror
                    <!--Select Antiguedad-->
                    <select class="form-control" wire:model="antiguedad">
                        <option>* Antigüedad de su trabajo actual</option>
                        <option>De 0 a 3 meses </option>
                        <option>De 3 a 6 meses</option>
                        <option>De 6 a 12 meses</option>
                        <option>1 año</option>
                        <option>De 1 a 3 años</option>
                        <option>De 3 a 5 años</option>
                        <option>De 5 a 10 años</option>
                        <option>Más de 10 años</option>
                    </select>
                        <!--Rama de la empresa-->
                        <input class="form-control" list="ramo" placeholder="* Rama de la empresa"/>
                    <!--Banco de Cuentas-->
                    <select class="form-control" wire:model="banco_nomina" name="empresas">
                        <option>* Banco de cuenta de nomina</option>
                        
                        @foreach ($empresas as $e)
                        <option value="{{$e->id}}">{{ $e->name }}</option>    
                        @endforeach
                    </select>
                    <br />
                    {{--Botones del formulario 1--}}
                    <div class="row">
                        <div class="col-2">
                            <button class="btn btn-verde nextBtn btn-lg pull-left" type="button">Regresar</button>
                        </div>
                        <div class="col-8">
                            
                        </div>
                        <div class="col-2">
                            <button class="btn btn-naranja nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Continuar</button>
                        </div>
                    </div>

                </div>

                <div class="col-1"></div>
                
        </div>
       
        
        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
           
        

            <div class="col-1"></div>
            {{--Inicio de campos del Formulario --}}
            <div class="col-10">
                    <p class="titulo-naranja">Datos para Iniciar sesión</p>
                    <p class="titulo-rojo">Campos (*)</p>
                    
                    <input class="form-control" type="text" placeholder="* Telefono de contacto">
                    <input type="text" class="form-control" placeholder="* Correo electrónico"><br/>
                    <input type="password" class="form-control" placeholder="* Contraseña"><br/>
                    <input type="password" class="form-control" placeholder="* Verificar contraseña">

                    <br />
                {{--Botones del formulario 2--}}
                <div class="row btns">
                    <div class="col-2">
                        <button class="btn btn-verde nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Regresar</button>
                    </div>
                    <div class="col-8">
                        
                    </div>
                    <div class="col-2">
                        <button class="btn btn-naranja nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Contiuar</button>
                    </div>
                </div>

            </div>

            <div class="col-1"></div>

        </div>

        
        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <p class="titulo-naranja">Documentos</p>
           <div class="col-1"></div>
           <div class="col-10">
            {{--Inicio del formulario 3--}}
            <p class="texto">Para hacer uso de su crédito es importante adjuntar la siguiente documentación:</p>
            <p class="texto-rojo-s">"Recuerda subir tus documentos de la forma más legible posible"</p>
            <p class="texto-negro-s">"Los archivos no deben de pesar más de 2 MB."</p>
            {{--Campos para subir datos--}}
            <div class="row">
                <div class="col-5">INE (frente)</div>
                <div class="col-5"><input type="file"></div>
            </div>
            <div class="row">
                <div class="col-5">INE (reverso)</div>
                <div class="col-5"><input type="file"></div>
            </div>
            <div class="row">
                <div class="col-5">Comprobante de comicilio</div>
                <div class="col-5"><input type="file"></div>
            </div>
            <div class="row">
                <div class="col-5">Tomate una foto con tu INE</div>
                <div class="col-5"><input type="file"></div>
            </div>
            {{--Botones formulario 3--}}
            <div class="row btns">
                <div class="col-2">
                    <button class="btn btn-verde nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Regresar</button>
                </div>
                <div class="col-8">
                </div>
                <div class="col-2">
                    <button class="btn btn-naranja nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Contiuar</button>
                </div>
            </div>
           </div>
           <div class="col-1"></div>
           
        </div>

</div>


