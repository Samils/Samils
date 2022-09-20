<?php
/**
 * @todo ass
 *
 *
 */
namespace Application\Test {
	use User;
  use Sami\Base\Mock;
  use Sami\Base\Faker;
  use Sammy\Packs\HTTP\Request;
	/**
	 * @category User Creation
	 */
	context('User creation', function () {
		/**
		 * 1
		 */
		it('should create user', function () {
			$user = new User;

			$user->name = 'Sam';
			$user->email = 'sam@bo.net';

			hope($user->save())->tobe_valid;
		});

    it('should fail if name is null', function () {
      $user = new User;

      $user->email = 'sam@bo';

      hope($user->save())->tobe_invalid;
      hope($user->id)->tobe_null;
    });
	});

  context('User UPDATE', function () {
    it('should update user name and email', function () {
      $user = Mock::find (new User);

      $request = Faker::CreateObject (new Request);

      $userDatas = $request->only ('name', 'email');

      $user->update_attributes ($userDatas);

      hope ($user->name)->tobe($userDatas['name']);
      hope ($user->email)->tobe($userDatas['email']);
    });

    it('should update user name by asigning the property', function () {
      $user = Mock::find (new User);

      $request = Faker::CreateObject (new Request);

      $userDatas = $request->only ('name');

      $user->name = $userDatas['name'];

      $user->save();

      hope ($user->name)->tobe($userDatas['name']);
    });
  });
}
