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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>Todolist</title>
    <link rel="stylesheet" href={{ asset('css\style.css') }}>
</head>

<body>
    <div class="content ">
        <div class=" col-12">
            <h2>Task Lists</h2>
        </div>

        <div class="box col-md-12 col-12">
            <form action="{{ route('save.data') }}" method="POST">
                @csrf

                <input class="col-12 col-md-9 enter-tab" placeholder="What do you have planned?" type="text"
                    name="dataname" id="">

                <input class="col-12 col-md-2" type="submit" value="Add Task">
                @error('dataname')
                    <p class="">{{ $message }}</p>
                @enderror
            </form>
            @if(Session::has('message'))
            <script>
                swal("message","{{Session::get('message') }}",'success',
                {
                    button:true,
                    button:"OK",
                    timer:3000,
                });
            </script>
            @endif
        </div>

        <div class="box col-md-12 col-12">
            <h5 class="col-12">Tasks</h5>
            @foreach ($datas as $data)
                <div class="tasks  col-md-12 col-sm-12">
                    <div class="line">
                        <input value="{{ $data->name }}" class="data col-sm-12 col-md-9" type="text" readonly>
                        <a href={{ Route('update.data', $data->ids) }} class="update col-sm-6 col-md-1"
                            href="">Update</a>
                        <a href={{ Route('remove.data', $data->ids) }} class="delete col-sm-6 col-md-1"
                            href="">Delete</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
