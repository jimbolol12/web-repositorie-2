
<button>
    <a href="/Add-event-form">add event</a>
</button>

<Table>
    <thead>
        <th>
            Naam
        </th>
        <th>
            avalable tickets
        </th>
        <th>
            Locatie
        </th>
        <th>Acties</th>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>
                {{ $event->name }}
            </td><td>
                {{ $event->available_tickets }}
            </td>
            <td>
                {{ $event->location }}
            </td>
            <td>
                <a href="">Delete</a>
            </td>
            <td>
                <a >Change</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</Table>