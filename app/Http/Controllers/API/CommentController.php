<?php
    namespace App\Http\Controllers\API;

    use App\Http\Controllers\Controller;
    use App\Models\Comment;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class CommentController extends Controller {
        public function index($type, $slug) {
            $model = $this->resolveModel($type, $slug);
            $comments = $model->comments()->with(['user:id,name', 'replies.user:id,name'])->get();
            return response()->json($comments);
        }

        public function store(Request $request, $type, $slug) {
            $request->validate([
                'body' => 'required|string|max:2000',
                'parent_id' => 'nullable|exists:comments,id',
            ]);
            $user = Auth::user();
            if (!$user) {return response()->json(['message' => 'Unauthorized'], 401);}
            $model = $this->resolveModel($type, $slug);
            $comment = $model->comments()->create([
                'user_id' => $user->id,
                'body' => $request->body,
                'parent_id' => $request->parent_id,
            ]);
            return response()->json([
                'message' => 'Comentário criado com sucesso!',
                'comment' => $comment->load('user', 'replies.user'),
            ], 201);
        }

        public function update(Request $request, $id)
{
    $comment = Comment::findOrFail($id);

    if (auth()->id() !== $comment->user_id) {
        return response()->json(['message' => 'Não autorizado'], 403);
    }

    $validated = $request->validate([
        'body' => 'required|string|max:2000',
    ]);

    $comment->update(['body' => $validated['body']]);

    return response()->json([
        'message' => 'Comentário atualizado com sucesso!',
        'comment' => $comment,
    ]);
}


        public function destroy($id) {
            $comment = Comment::findOrFail($id);
            $user = Auth::user();
            if ($user->id !== $comment->user_id) {return response()->json(['message' => 'Acesso negado.'], 403);}
            $comment->update([
                'body' => '[comentário removido]',
                'is_deleted' => true,
            ]);
            return response()->json(['message' => 'Comentário removido.']);
        }

        private function resolveModel($type, $slug) {
            $map = [
                'char' => \App\Models\Char::class,
                'post' => \App\Models\Post::class ?? null,
            ];
            if (!isset($map[$type]) || !$map[$type]) {abort(404, "Tipo inválido: $type");}
            $modelClass = $map[$type];
            return $modelClass::where('slug', $slug)->firstOrFail();
        }
    }
