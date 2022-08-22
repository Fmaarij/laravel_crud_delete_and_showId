<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Welcome Page</title>
</head>

<body>
    <div class="AllSections ">
        {{-- Form pour ajouter et supprimer --}}
        <section class="sect1 bg-success ">
            <div class="row bg-success text-white">
                <div class="col bg-success">
                    <h3 class="text-center text-danger">Ajouter des voitures dans votre base de donées.</h3>
                    <div class=" bg-success  text-center fst-italic fs-5">
                        <form action="create" class="bg-success d-flex flex-column " method="post">
                            @csrf
                            <label for="">Marque</label>
                            <input class="bg-danger text-white-50" type="text" name="marque">
                            <label for="">Année</label>
                            <input class="bg-danger text-white-50" type="date" name="annee">
                            <label for="">Couleur</label>
                            <input class="bg-danger text-white-50" type="text" name="couleur">
                            <label for="">Prix</label>
                            <input class="bg-danger text-white-50" type="number" name="prix">
                            <label for="">Réduction</label>
                            <input class="bg-danger text-white-50" type="number" name="reduction">
                            <button type="submit" clas class="btn btn-danger ">Ajouter</button>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <h3 class="text-danger-50">Affichage de la base de données.</h3>
                    <div class="row">
                        <table>
                            <tr class="border border-striped text-center">
                                <th class="col bg-danger">Marque</th>
                                <th class="col bg-danger">Année</th>
                                <th class="col bg-danger">Prix</th>
                                <th class="col bg-danger">Reduction</th>
                                <th class="col bg-danger">Delete</th>
                                <th class="col bg-danger">Edit</th>
                            </tr>
                            @foreach ($CarBD as $item)
                                <tr class="text-center">
                                    <td class="col bg-dark border rounded">{{ $item->marque }}</td>
                                    <td class="col bg-dark border rounded">{{ $item->annee }}</td>
                                    <td class="col bg-dark border rounded">{{ $item->prix }}$</td>
                                    <td class="col bg-dark border rounded">{{ $item->reduction }}%</td>
                                    <td class="col bg-dark border rounded">
                                        <form action="{{ $item->id }}/delete" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-danger border rounded">Delete</button>
                                        </form>
                                    </td>
                                    <td class="col bg-dark border rounded">
                                        <a href="crudEdit/{{ $item->id }}"> <button
                                                class="bg-warning border rounded">Edit</button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
