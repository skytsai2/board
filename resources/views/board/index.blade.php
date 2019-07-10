  @extends('layout.index')

  @section('content')
  @if (Session::has('userName'))
  <a href="/board/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
  @endif
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Detail</th>
        <th>Time</th>
        <th>Title</th>
        @if (Session::has('userName'))
        <th>&nbsp;</th>
        @endif
      </tr>
    </thead>
    <tbody>

    @foreach ($boardList as $board)
    <tr>
        <td><a href="/board/{{$board->id}}" class="btn btn-xs btn-info">檢視</a></td>
        <td>{{$board->time}}</td>
        <td>{{$board->title}}</td>

        @if (Session::has('userName'))
        <td>
            <span class="pull-right">
                <form method="post" action="/board/{{$board->id}}"> 
                    <a href="/board/{{$board->id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> | 
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
            </span>
        </td>
        @endif
    </tr>
    @endforeach
    </tbody>
  </table>
  <div class="pull-right">
  <?php echo $boardList->render(); ?>
  </div>
  @endsection