<?php

namespace view;

class AddPlaylistView {
    public function playlistInputHTML() {
        return '
            <h2>New playlist</h2>
			<form method="post"> 
				<fieldset>
					<label for="">Title</label>
					<input type="text" name="" value="" />
					<input type="submit" name="" value="Create" />
				</fieldset>
			</form>
        ';
    }
}