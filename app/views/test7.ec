@def App
  <div>
    @for $n in range (2, 300)
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
      <div />
    @end # 23
    # 24
    @if $this->hasUsers ()
      @each $user in $users
        <User %{ $user } />
      @end
    @end
  </div>
@end