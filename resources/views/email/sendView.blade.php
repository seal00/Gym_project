
<fieldset>
    <legend>Activação de Conta</legend>
    <p>Para ativar a conta <a href="{{route('sendEmailDone', ["email" => $user->email, "verifyToken" => $user->verifyToken])}}">
    clique aqui</a></p>
</fieldset>