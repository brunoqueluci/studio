
$('#cadastroproduto').submit(function(e){
    e.preventDefault();

    var dadosproduto = [];
        dadosproduto["codigo"] = $('#codigo').val(),
        dadosproduto["descricao_produto"] = $('#descricao_produto').val(),
        dadosproduto["setor"] = $('#setor').val(),
        dadosproduto["valor_venda"] = $('#valor_venda').val(),
        dadosproduto["valor_custo"] = $('#valor_custo').val(),
        dadosproduto["estoque"] = $('#estoque').val(),
        dadosproduto["obs_produto"] = $('#obs_produto').val()

        console.log(dadosproduto);

    // $.ajax({
    //     url: 'controller/produto/Cadastro.php',
    //     method: 'POST',
    //     data: {
    //         codigo: codigo,
    //         descricao_produto: descricao_produto,
    //         setor: setor,
    //         valor_venda: valor_venda,
    //         valor_custo: valor_custo,
    //         estoque: estoque,
    //         obs_produto: obs_produto
    //     },
    //     dataType: 'json',
    //     sucess: function(data) {
    //         console.log(data);
    //     },
    //     error: console.log("error")

    // // }).done(function(result){
    // //     console.log(result);
    // });
});

