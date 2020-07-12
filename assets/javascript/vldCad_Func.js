$(function(){
    //pegando a variavel login, e submetendo o formulario por ela
    $('#cadastrar').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){

                if(data == "erroName"){

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Preencha o campo Nome!'
                      })
                }

                if(data == "erroUserName"){

                  const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      onOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                    })
                    
                    Toast.fire({
                      icon: 'error',
                      title: 'Preencha o campo UserName!'
                    })
              }

                if(data == "erroEmail"){

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Preencha o campo Email!'
                      })
                }

                if(data == "erroTipo"){

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Preencha o campo Tipo!'
                      })
                }

                if(data == "erroEmailExite"){
                  Swal.fire({
                    icon: 'error',
                    title: 'Já existente!',
                    text: 'Email já cadastrado.',
                    confirmButtonText: 'Ok'
                    });
                }

                if(data == "erroCpf"){

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Preencha o campo CPF!'
                      })
                }

                if(data == "erroCPFExiste"){
                  Swal.fire({
                    icon: 'error',
                    title: 'Já existente!',
                    text: 'CPF já cadastrado.',
                    confirmButtonText: 'Ok'
                    });
                }

                if(data == "erroSenha"){

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      
                      Toast.fire({
                        icon: 'error',
                        title: 'Preencha o campo Senha!'
                      })
                }

                if(data == "sucesso"){

                    Swal.fire({
                        icon: 'success',
                        title: 'Muito Bem!',
                        text: 'Cadastrado! Agora faça Login!',
                        confirmButtonText: 'Ok'
                        }).then((result) => {
                          if(result.value){
                            window.location.replace("Entrar");
                          }
                        })
                    }

                
                // if(data == "SucessoCliente"){
                //     //se der certo, ele entra no sucesso, vai para a
                //     window.location.replace("view/home/");
                // }
                // if(data == "SucessoAdministrador"){
                //     //se der certo, ele entra no sucesso, vai para a
                //     window.location.replace("view/administracao/");
                // }
                
            },//sucess
        });//ajax
        return false;//faz o ajax recarregar
    });//function de dentro
});//funciotion de fora
