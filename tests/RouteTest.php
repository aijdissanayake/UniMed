<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
   // use WithoutMiddleware;

    public function testInitialView(){
        $this->call('GET','/');
        $this->assertResponseOk();
    }
    public function testFeedBackView(){
        $user = User::find(1);
        $this->be($user);
        $response = $this->call('GET','/feedback');
        $this->assertEquals(200, $response->status());
    }


    public function testUserLogout(){
        $user = User::find(1);
        $this->be($user);
        $response=$this->call('GET','/logout');
        $this->assertEquals(302,$response->status());
    }

    public function testNewUserView(){
        $user = User::find(1);
        $this->be($user);
        $response=$this->call('GET','/newuser');
        $this->assertEquals(200,$response->status());
    }


    public function testProjectDashboard(){
        $user = User::find(1);
        $this->be($user);

        $response=$this->call('GET','/project');
        $this->assertEquals(200,$response->status());
        $content =($response->getOriginalContent());
        $content = $content->getData();
        
        $projects=$content['projects'];
        $project=$projects[0];
        $this->assertEquals(true,$project->id!=null);

    }


    public function testTechnicianView(){
        $user = User::find(1);
        $this->be($user);
        $response=$this->call('GET','/technicians');
        $content =($response->getOriginalContent());
        $content = $content->getData();
        $technicians=$content['technicians'];
        $this->assertEquals(200,$response->status());
        $this->assertEquals('Chamath Abeysinghe',$technicians[0]->name);
        $this->assertEquals('1',$technicians[0]->id);
    }

    public function testFinancialReport(){
        $user = User::find(1);
        $this->be($user);
        $response=$this->call('GET','/financialreport',['project_id'=>1]);
        $this->assertEquals(200,$response->status());
    }
}
