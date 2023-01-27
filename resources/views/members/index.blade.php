<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Kapogi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="Container p-5 m-5">
        <div class="display-5 fw-bold text-center">Gym Kapogi</div>
            <p class="text-center">What If <strong>Pogi</strong> talaga ako?</p>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Member</th>
                    <th>Trainer</th>
                </tr>
                <tr>
                    @if(isset($Members))
                </tr>

                <tr>
                
                </tr>

                @else
                <tr>
                    <th colspan="4" class="text-center">
                        Full Membership
                    </th>
                </tr>
                @endif


                
            </table>
    </div>

</body>
</html>