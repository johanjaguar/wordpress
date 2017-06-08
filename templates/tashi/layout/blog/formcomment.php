<?php
$comment_args = array(
	'fields' => apply_filters(
		'comment_form_default_fields', array(
			'author' => '<p class="comment-form-author">' .
				'<label for="author">' . __( 'Your Name' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' ) .
				'<input id="author" name="author" type="text" value="' .
				esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' .
				'</p><!-- #form-section-author .form-section -->',
			'email'  => '<p class="comment-form-email">' .
				'<label for="email">' . __( 'Your Email' ) . '</label> ' .
				( $req ? '<span class="required">*</span>' : '' ) .
				'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				'" size="30"' . $aria_req . ' />' .
				'</p><!-- #form-section-email .form-section -->',
			'url'    => ''
		)
	),
	'comment_field' => '<p class="comment-form-comment">' .
		'<label for="comment">' . __( 'Dejanos saber que tienes que decir:' ) . '</label><br/>' .
		'<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
		'</p><!-- #form-section-comment .form-section -->',
    'comment_notes_after' => '',
    'title_reply' => 'Porfavor escribe tus comentarios y/o replicas'
    ,'label_submit' => 'Enviar comentario'
    ,'cancel_reply_link' => 'Cancelar comentario'
    ,'title_reply_to' => 'Responder comentario o '
    , 'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Conectado como <a href="%1$s">%2$s</a>. <a href="%3$s" title="Desconectese de esta cuenta"> ¿Desconectar?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>'
    ,'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'Debes de conectarte  <a href="%s">aqui </a> para publicar un comentario.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>'
    ,'comment_notes_before' => '<p class="comment-notes">' . __( 'Tu dirección de email no sera publicada.' ) . ( $req ? $required_text : '' ) . '</p>'
);
comment_form( $comment_args );

?>