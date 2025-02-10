<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eprocurement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid">
         <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="#">Lazio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <select class="form-select ms-auto me-2" aria-label="Default select example" style="width:200px" id="categoryFilter">
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as  $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                  
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="keyword">
                        <button class="btn btn-outline-success" type="submit" id="search">Search</button>
                    </form>
                    
                </div>
            </div>
         </nav>
    </div>

    <div class="container mt-5" id="container-product">
        
    </div>

    <div class="container mt-5" id="container-pagination">
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function ajaxProduk(page,category,keyword){
            $.ajax({
                url: `{{secure_url('data-product')}}?page=${page}&category=${category}&keyword=${keyword}`,
                type: "get",
                dataType: "json",
                async: false,
            }).done(function (res) {
                    const data=res.data;
                    let productHtml = '';
                    let paginationHtml='';

                    $.each(data, function(index,product){
                        productHtml += `
                            <div class="col-lg-3 mb-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="/storage/${product.image}" class="card-img-top" alt="${product.image}">
                                    <div class="card-body">
                                        <h5 class="card-title">${product.name}</h5>
                                         <h6 class="card-subtitle mb-2 text-body-secondary">${product.vendor} | ${product.category}</h6>
                                         <h6 class="card-subtitle mb-2 text-body-secondary">Price : ${product.price}</h6>

                                        <p class="card-text">${product.description}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                    });

                    paginationHtml += `<div class="row"><div class="col-12"><nav><ul class="pagination justify-content-center">`;
                        
                    $.each(res.pagination.links, function (index, link) {
                        let activeClass = link.active ? "active" : "";
                        let disabledClass = link.url === null ? "disabled" : "";

                        paginationHtml += `
                            <li class="page-item ${activeClass} ${disabledClass}">
                                <a class="page-link" href="#" data-page="${link.url ? new URL(link.url).searchParams.get('page') : '#'}">${link.label}</a>
                            </li>`;
                    });

                    paginationHtml += `</ul></nav></div></div>`;
                    $('#container-product').html(`<div class="row">${productHtml}</div`);
                    $('#container-pagination').html(paginationHtml);

                }).fail(function (error) {
                    alert("Error", error);
                });
        }

        ajaxProduk(1);

        $(document).on('click','.pagination a', function(event){
            event.preventDefault();
            let page=$(this).data('page');
            let category_id = $("#categoryFilter").val();
            let keyword=$('#keyword').val();

            if(page && page !== '#'){
                ajaxProduk(page,category_id,keyword);
            }
        });

        $('#categoryFilter').change(function(){
            let id=$(this).val();
            let keyword=$('#keyword').val();

            ajaxProduk(1,id,keyword);
        });

        $('#search').click(function(){
            let category=$('#categoryFilter').val();
            let keyword=$('#keyword').val();

            if(keyword.trim('') !== ''){
                ajaxProduk(1,category,keyword);
            }
        });

    </script>
</body>
</html>
