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

                if(data == "erroDesc"){

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
                      title: 'Preencha o campo Descrição!'
                    })
              }

                if(data == "erroPreco"){

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
                        title: 'Preencha o campo Preço!'
                      })
                }

                if(data == "erroCod"){

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
                        title: 'Preencha o campo Código de Barras!'
                      })
                }

                if(data == "erroCodN"){
                  Swal.fire({
                    icon: 'error',
                    title: 'Coloque a quantidade certa!',
                    text: 'Até 13 digitos.',
                    confirmButtonText: 'Ok'
                    });
                }

                if(data == "erroEstoque"){

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
                        title: 'Preencha o campo Estoque!'
                      })
                }


                if(data == "sucesso"){

                    Swal.fire({
                        icon: 'success',
                        title: 'Muito Bem!',
                        text: 'Cadastrado! Agora faça Login!',
                        confirmButtonText: 'Ok'
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
