<div class="container-fluid">
    <div>
        <h2>어드민 아이디 생성</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open(base_url().'AdminAccountCheck'); ?>
            <input name="admin_account_create" value="1" type="hidden"/>

            <label for="admin_id">아이디</label>
            <input id="admin_id" class="form-control" name="admin_id" type="text" placeholder="아이디">
            <label for="admin_pw">패스워드</label>
            <input id="admin_pw" class="form-control" name="admin_pw" type="password" placeholder="패스워드">
            <label for="admin_pwc">패스워드 확인</label>
            <input id="admin_pwc" class="form-control" name="admin_pwc" type="password" placeholder="패스워드 확인">
            <button type="submit" class="btn btn-default">만들기</button>
        </form>
    </div>
</div>
