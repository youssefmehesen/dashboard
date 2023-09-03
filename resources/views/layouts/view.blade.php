<title>

</title>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</header>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">message</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $contact )
    <tr>
      <th scope="row">{{$contact->id}}</th>
      <td>{{$contact->name}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->message}}</td>
      <td>{{$contact->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>