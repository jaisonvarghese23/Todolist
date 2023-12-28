<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Todolist</title>
    <link rel="stylesheet" href={{ asset('css\style.css') }}>
</head>

<body>
    <div class="content ">
        <div class=" col-12">
            <h2>Task Lists</h2>
        </div>

        <div class="box col-md-12 col-12">
            <form action="{{ route('edit.data') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value={{ $d->ids }}>

                <input class="col-12 col-md-9 enter-tab" value={{ $d->name }}
                    placeholder="What do you have planned?" type="text" name="dataname" id="">

                <input class="col-12 col-md-2" type="submit" value="Update">
                @error('dataname')
                    <p class="">{{ $message }}</p>
                @enderror
            </form>
        </div>
</body>

</html>
