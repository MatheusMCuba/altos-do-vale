function Admin(){
    let self = this;

    self.RenumerarLista = function(){
        $('#wpBannersLista li').each(function(i){
            $(this).find('.cardinal').text('#' + (++i));
            self.AtualizarPosicaoBanner($(this).data('codigo'), i);
        });
    };

    self.InitSortable = function(){
        Sortable.create($('#wpBannersLista')[0], {
            onEnd: self.RenumerarLista
        });
    };

    self.ExcluirBanner = function(codigo){
        $.post('/admin/excluir_banner', { codigo:codigo}, function(){
            window.location.reload();
        }).fail(function(e){
            console.log(e);
        });
    };

    self.AddEvents = function(){
        $('#filesInput').change(function(){
            if (this.files && this.files[0]) {
                let arr = Array.from(this.files);
                if(arr.length > 3)
                    arr = arr.slice(0, 3);

                Array.from(this.files).forEach(function(file){
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        let listElement = $('<div data-temp class="banner-image m-1"></div>');
                        let imageElement = $('<img>');
                        imageElement.attr('src', e.target.result)
                        listElement.append(imageElement);
                        $('#wpImages').append(listElement);
                    };
                    reader.readAsDataURL(file);
                });
            }
        });

        $(document).on('click', '.banner-image[data-temp]', function(){
            $(this).remove();
        });

        $(document).on('click', '.btnExcluir', function(){
            if(confirm('Tem certeza que quer excluir este Banner?'))
                self.ExcluirBanner($(this).parents('li').data('codigo'));
        });

        $('form').submit(function(){
            if(!$('#descricao').val()){
                alert('Necessário Informar a Descrição');
                $('#descricao').focus();
                return false;
            }
            if($('[data-temp]').length != 3) {
                alert('Necessário Informar 3 Imagens');
                return false;
            }

            document.body.style.cursor='wait';
            $('#btnSalvar').attr('disabled', true);
        });
    };

    self.AtualizarPosicaoBanner = function(codigo, posicao){
        //Dá pra fazer só { codigo, posicao }, mas nem todos browsers suportam
        $.post('/admin/atualizar_posicao', { codigo:codigo, posicao: posicao }, function(){}).fail(function(e){
            console.log(e);
        });
    };

    self.Init = (function(){
        self.InitSortable();
        self.AddEvents();
    })();
};

$(function(){
    window.Admin = new Admin();
})
