<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
    <title>Document</title>   
</head>

<body>
<header class="header">
<form action="/../ScandiWeb/app/includes.php" method="POST">
    <div class="appName">Add Product</div>
        <button class="button cancel" name="cancel">Cancel</button>
    </form>
</header>

    <div class="addscreen">
        <form id="product_form" class="addform" action="/../ScandiWeb/app/includes.php" method="POST" accept-charset="utf-8">
              SKU:<input id="sku" class="field" type="text" name="SKU" required><br>
     Product name:<input id="name" class="field" type="text" name="Name" required><br>
        Price ($):<input id ="price" class="field" type="number" name="Price" required><br>
    
            <select id="productType" class="addType" name="productType">
                <option value="">Type</option>
                <option value="dvd-input">DVD</option>
                <option value="book-input">Book</option>
                <option value="furnit-input">Furniture</option>      
            </select>

            <div class="form-div">
                <div class="dvd-input">
                Size (MB): <input id="size" name="size" type="text" class="field" value=""><br>
                </div>
                <div class="book-input">
                Weight (KG): <input id="weight" name="weight" type="text" class="field" value=""><br>
                </div>
                <div class="furnit-input">
                Height (CM): <input id="height" name="height" type="text" class="field" value=""><br>
                Width (CM): <input id="width" name="width" type="text" class="field" value=""><br>
                Length (CM): <input id="length" name="length" type="text" class="field" value=""><br>
                </div>            
            </div>
    
            <script type="text/javascript">
                $(document).ready(function () {
                $(".AddType").on('change', function () {
                var selectValue ='.'+$(this).val();
                $('.form-div div').hide();
                $(selectValue).toggle();
            });
            });
            </script>
            <input type="submit" name="Send" value="Save" class="button-cancel"> 
    
        </form>
    </div>

    <link rel="stylesheet" type="text/css" href="/../ScandiWeb/app/main.css"> 
          
</body>
</html>