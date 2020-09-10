<div class="table-responsive-sm">
    <table class="table table-striped" id="statusServicos-table">
        <thead>
            <tr>
                <th>Descricao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statusServicos as $statusServico)
            <tr>
                <td>{{ $statusServico->descricao }}</td>
                <td>
                    {!! Form::open(['route' => ['statusServicos.destroy', $statusServico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statusServicos.show', [$statusServico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('statusServicos.edit', [$statusServico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>