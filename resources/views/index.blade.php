<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>All Users</title>

    </head>
    <body class="antialiased mt-10">
        <h1 class="text-lg px-5">All Users</h1>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                    <thead class="bg-white border-b">
                        <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            #
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Name
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Email
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            Phone
                        </th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody> <?php $count=1; ?>
                        @foreach ($users as $user)
                        <tr class="bg-white border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $count; ?></td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $user->name }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $user->email }}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{ $user->phone }}
                        </td>
                        <td>
                            <a class="card-link" href="{{ URL::to($user->id.'/edit') }}"> Edit </a>
                        </td>
                        <td>
                            <a class="card-link" href="{{ URL::to('/'.$user->id) }}"> Delete </a>
                        </td>
                        </tr> <?php $count++ ?>
                        @endforeach
                    </tbody>
                    </table>
                    <form action="/add" method="post">
                        @csrf
                        <button class="bg-blue-500 mt-3 ml-3 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add New User
                        </button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
