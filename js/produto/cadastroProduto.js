$('#cadastroproduto').submit(function(e){
    e.preventDefault();

    var codigo = $('#codigo').val();
    var descricao_produto = $('#descricao_produto').val();
    var setor = $('#setor').val();
    var valor_venda = $('#valor_venda').val();
    var valor_custo = $('#valor_custo').val();
    var estoque = $('#estoque').val();
    var obs_produto = $('#obs_produto').val();

    $.ajax({
        url: 'controller/produto/Cadastro.php',
        method: 'POST',
        data: {
            codigo: codigo,
            descricao_produto: descricao_produto,
            setor: setor,
            valor_venda: valor_venda,
            valor_custo: valor_custo,
            estoque: estoque,
            obs_produto: obs_produto
        },
        dataType: 'json'
    }).done(function(result){
        console.log(result);
    });
});



