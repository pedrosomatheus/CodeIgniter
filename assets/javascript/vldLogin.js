$(function(){
    //pegando a variavel login, e submetendo o formulario por ela
    $('#login').submit(function(){
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

                if(data == "erroUser"){

                Swal.fire({
                    icon: 'error',
                    title: 'Erro ao preencher campos!',
                    text: 'Campo Usuário ou E-mail vazio!',
                    confirmButtonText: 'Ok'
                    });
                }

                if(data == "erroPass"){

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

                if(data == "FalhaLogin"){

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
                        title: 'Falha Login!'
                      })
                }


                
                if(data == "sucessoCliente"){
                    //se der certo, ele entra no sucesso, vai para a
                    window.location.replace("TelaCliente");
                }
                if(data == "SucessoAdm"){
                    //se der certo, ele entra no sucesso, vai para a
                    window.location.replace("TelaAdm");
                }
                
            },//sucess
        });//ajax
        return false;//faz o ajax recarregar
    });//function de dentro
});//funciotion de fora
