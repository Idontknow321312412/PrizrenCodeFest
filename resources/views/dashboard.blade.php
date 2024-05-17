<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="container">
            <label>Menu</label>
            <a href="{{ route('addItemForm') }}"><button class="add-item">Add item</button></a>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>Item Picture</th>
                        <th>Item Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tableData as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->item_name }}</td>
                            <td class="picture_container">
                                @if ($row->item_picture)
                                    <img src="{{ asset('storage/item_pictures/' . $row->item_picture) }}" alt="{{ $row->item_name }}" class="picture">
                                @else
                                    No Picture
                                @endif
                            </td>
                            <td>{{ $row->item_price }}</td>
                            
                                <td>
                                    <a href="{{  url('edit/'. $row->id) }}" class="edit-button">Edit</a>
                                    <a href="#" onclick="confirmDelete('{{  url('delete/'. $row->id) }}')" class="delete-button">Delete</a>

                                        <script>
                                            function confirmDelete(deleteUrl) {
                                                if (confirm("Are you sure you want to delete this item?")) {
                                                    var form = document.createElement('form');
                                                    form.method = 'POST';
                                                    form.action = deleteUrl;
                                                    form.style.display = 'none';

                                                    var csrfTokenField = document.createElement('input');
                                                    csrfTokenField.type = 'hidden';
                                                    csrfTokenField.name = '_token';
                                                    csrfTokenField.value = '{{ csrf_token() }}';
                                                    form.appendChild(csrfTokenField);

                                                    var methodField = document.createElement('input');
                                                    methodField.type = 'hidden';
                                                    methodField.name = '_method';
                                                    methodField.value = 'DELETE';
                                                    form.appendChild(methodField);

                                                    document.body.appendChild(form);
                                                    form.submit();
                                                }
                                            }
                                        </script>

                                </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>
</body>
</html>