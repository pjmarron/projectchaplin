<?php
/**
 * This file is part of Project Chaplin.
 *
 * Project Chaplin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Project Chaplin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Project Chaplin. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   ProjectChaplin
 * @author    Dan Dart <chaplin@dandart.co.uk>
 * @copyright 2012-2018 Project Chaplin
 * @license   http://www.gnu.org/licenses/agpl-3.0.html GNU AGPL 3.0
 * @version   GIT: $Id$
 * @link      https://github.com/danwdart/projectchaplin
**/

namespace Chaplin\Gateway;

use Chaplin\Gateway\GatewayAbstract;
use Chaplin\Dao\Interfaces\Video as InterfaceVideo;
use Chaplin\Model\User;
use Chaplin\Model\Video as ModelVideo;

class Video extends GatewayAbstract
{
    private $_daoVideo;

    public function __construct(InterfaceVideo $daoVideo)
    {
        $this->_daoVideo = $daoVideo;
    }

    public function getFeaturedVideos(User $modelUser = null)
    {
        return $this->_daoVideo->getFeaturedVideos($modelUser);
    }

    public function getByVideoId($strVideoId, User $modelUser = null)
    {
        return $this->_daoVideo->getByVideoId($strVideoId, $modelUser);
    }
    
    public function getByUser(User $modelUser)
    {
        return $this->_daoVideo->getByUser($modelUser);
    }
    
    public function getByUserUnnamed(User $modelUser)
    {
        return $this->_daoVideo->getByUserUnnamed($modelUser);
    }
    
    public function getBySearchTerms($strSearchTerms)
    {
        return $this->_daoVideo->getBySearchTerms($strSearchTerms);
    }

    public function delete(ModelVideo $modelVideo)
    {
        return $this->_daoVideo->delete($modelVideo);
    }

    public function save(ModelVideo $modelVideo)
    {
        return $this->_daoVideo->save($modelVideo);
    }
}
