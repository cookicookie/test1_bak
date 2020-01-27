<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Http\Request;
//上記のRequestでは::allをuseしている段階でしてくれているため、function内で::allを記述する必要がない
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\DB;
use App\learn;
use App\Quick_win;
use App\Active;
use App\Anger_log;
use App\Emotion;
use App\Positive_thinking;
use App\Stress_diary;
use App\Trial;
use App\Trap_trac;
use App\Automatic_thinking;
use App\Act_value;
use App\Conflict;

class learncontroller extends Controller
{
  public function insert(Request $request)
  {
    $up = new learn();
    $up->goal_setting = $request->goal_setting;
    $up->important = $request->important;
    $up->disability = $request->disability;
    $up->deal = $request->deal;
    $up->fill([
      'goal_setting' => $request->goal_setting,
      'important' => $request->important,
      'disability' => $request->disability,
      'deal' => $request->deal,
    ]);

    // データベースに値をinsert
    $up->save();
    //db保存パターン2
    //$club_member->create(['name' => $request->name,
    //'kana' => $request->kana,
    //'birth_year' => $request->year,
    //'birth_day' => $request->date,
    //'postal_code' => $request->portal,
    //'tel' => $request->tel,
    //'pref_type' => $request->prefectures,
    //'city' => $request->municipality,
    //'adress' => $request->later,
    //'other' => $request->other,
    //]);
    $ups = learn::paginate(1);
    return view('up', compact('ups'));
  }
  public function daiki()
  {
      $posts = learn::all();
      dd($posts);
  
      return response()->json([
          'posts' => $posts
      ]);
  }

  public function lists()
  {
    $ups = learn::paginate(1);
    //return view ('up', ['requests' => $requests]);
    return view('up', compact('ups'));
  }

  public function insert_quick_win(Request $request)
  {
    $quick_win = new Quick_win();
    $quick_win->quick_win = $request->quick_win;
    $quick_win->difficulty = $request->difficulty;
    $quick_win->impact = $request->impact;
    $quick_win->total_score = $request->total_score;
    $quick_win->project = $request->project;
    $quick_win->fill([
      'quick_win' => $request->quick_win,
      'difficulty' => $request->difficulty,
      'impact' => $request->impact,
      'total_score' => $request->total_score,
      'project' => $request->project,
    ]);
    $quick_win->save();
    $quick_wins = Quick_win::paginate(1);
    return view('quick_win', compact('quick_wins'));
  }
  public function list_quick_win()
  {
    $quick_wins = Quick_win::paginate(1);
    return view('quick_win', compact('quick_wins'));
  }

  public function insert_conflict(Request $request)
  {
    $conflict = new Conflict();
    $conflict->act_merit = $request->act_merit;
    $conflict->act_demerit = $request->act_demerit;
    $conflict->not_act_merit = $request->not_act_merit;
    $conflict->not_act_demerit = $request->not_act_demerit;
    $conflict->fill([
      'act_merit' => $request->act_merit,
      'act_demerit' => $request->act_demerit,
      'not_act_merit' => $request->not_act_merit,
      'not_act_demerit' => $request->not_act_demerit,
    ]);
    $conflict->save();
    $conflicts = Conflict::paginate(1);
    return view('conflict', compact('conflicts'));
  }
  public function list_conflict()
  {
    $conflicts = Conflict::paginate(1);
    return view('conflict', compact('conflicts'));
  }

  public function insert_active(Request $request)
  {
    $active = new Active();
    $active->prediction = $request->prediction;
    $active->rating = $request->rating;
    $active->experiment = $request->experiment;
    $active->result = $request->result;
    $active->learn = $request->learn;
    $active->re_rating = $request->re_rating;
    $active->fill([
      'prediction' => $request->prediction,
      'diratingfficulty' => $request->rating,
      'experiment' => $request->experiment,
      'result' => $request->result,
      'learn' => $request->learn,
      're_rating' => $request->re_rating,
    ]);
    $active->save();
    $actives = Active::paginate(1);
    return view('active', compact('actives'));
  }
  public function list_active()
  {
    $actives = Active::paginate(1);
    return view('active', compact('actives'));
  }

  public function insert_anger_log(Request $request)
  {
    $anger_log = new Anger_log();
    $anger_log->cause_of_anger = $request->cause_of_anger;
    $anger_log->reaction = $request->reaction;
    $anger_log->judgment_of_reaction = $request->judgment_of_reaction;
    $anger_log->fill([
      'cause_of_anger' => $request->cause_of_anger,
      'reaction' => $request->reaction,
      'judgment_of_reaction' => $request->judgment_of_reaction,
    ]);
    $anger_log->save();
    $anger_logs = Anger_log::paginate(1);
    return view('anger_log', compact('anger_logs'));
  }
  public function list_anger_log()
  {
    $anger_logs = Anger_log::paginate(1);
    return view('anger_log', compact('anger_logs'));
  }

  public function insert_emotion(Request $request)
  {
    $emotion = new Emotion();
    $emotion->vocabulary = $request->vocabulary;
    $emotion->mean = $request->mean;
    $emotion->fill([
      'vocabulary' => $request->vocabulary,
      'mean' => $request->mean,
    ]);
    $emotion->save();
    $emotions = Emotion::paginate(1);
    return view('emotion', compact('emotions'));
  }
  public function list_emotion()
  {
    $emotions = Emotion::paginate(1);
    return view('emotion', compact('emotions'));
  }

  public function insert_positive_thinking(Request $request)
  {
    $positive_thinking = new Positive_thinking();
    $positive_thinking->positive_thinking = $request->positive_thinking;
    $positive_thinking->ideal_thinking = $request->ideal_thinking;
    $positive_thinking->negative_thinking = $request->negative_thinking;
    $positive_thinking->fill([
      'positive_thinking' => $request->positive_thinking,
      'ideal_thinking' => $request->ideal_thinking,
      'negative_thinking' => $request->negative_thinking,
    ]);
    $positive_thinking->save();
    $positive_thinkings = Positive_thinking::paginate(1);
    return view('positive_thinking', compact('positive_thinkings'));
  }
  public function list_positive_thinking()
  {
    $positive_thinkings = Positive_thinking::paginate(1);
    return view('positive_thinking', compact('positive_thinkings'));
  }

  public function insert_stress_diary(Request $request)
  {
    $stress_diary = new Stress_diary();
    $stress_diary->stress = $request->stress;
    $stress_diary->happiness = $request->happiness;
    $stress_diary->emotion = $request->emotion;
    $stress_diary->productivity = $request->productivity;
    $stress_diary->source_of_stress = $request->source_of_stress;
    $stress_diary->body_reaction = $request->body_reaction;
    $stress_diary->response_level = $request->response_level;
    $stress_diary->fill([
      'stress' => $request->stress,
      'happiness' => $request->happiness,
      'emotion' => $request->emotion,
      'productivity' => $request->productivity,
      'source_of_stress' => $request->source_of_stress,
      'body_reaction' => $request->body_reaction,
      'response_level' => $request->response_level,
    ]);
    $stress_diary->save();
    $stress_diarys = Stress_diary::paginate(1);
    return view('stress_diary', compact('stress_diarys'));
  }
  public function list_stress_diary()
  {
    $stress_diarys = Stress_diary::paginate(1);
    return view('stress_diary', compact('stress_diarys'));
  }

  public function insert_trial(Request $request)
  {
    $trial = new Trial();
    $trial->defendant = $request->defendant;
    $trial->defense = $request->defense;
    $trial->prosecution = $request->prosecution;
    $trial->jury = $request->jury;
    $trial->judgment = $request->judgment;
    $trial->fill([
      'defendant' => $request->defendant,
      'defense' => $request->defense,
      'prosecution' => $request->prosecution,
      'jury' => $request->jury,
      'judgment' => $request->judgment,
    ]);
    $trial->save();
    $trials = Trial::paginate(1);
    return view('trial', compact('trials'));
  }
  public function list_trial()
  {
    $trials = Trial::paginate(1);
    return view('trial', compact('trials'));
  }
  public function insert_trap_trac(Request $request)
  {
    $trap_trac = new Trap_trac();
    $trap_trac->trap_trigger = $request->trap_trigger;
    $trap_trac->trap_res = $request->trap_res;
    $trap_trac->trap_avoidance = $request->trap_avoidance;
    $trap_trac->trap_avoidance_sohrt = $request->trap_avoidance_sohrt;
    $trap_trac->trap_avoidance_long = $request->trap_avoidance_long;
    $trap_trac->trac_trigger = $request->trac_trigger;
    $trap_trac->trap_coping = $request->trap_coping;
    $trap_trac->trap_coping_short = $request->trap_coping_short;
    $trap_trac->trap_coping_long = $request->trap_coping_long;
    $trap_trac->trac_res = $request->trac_res;
    $trap_trac->fill([
      'trap_trigger' => $request->trap_trigger,
      'trap_res' => $request->trap_res,
      'trap_avoidance' => $request->trap_avoidance,
      'trap_avoidance_sohrt' => $request->trap_avoidance_sohrt,
      'trap_avoidance_long' => $request->trap_avoidance_long,
      'trac_trigger' => $request->trac_trigger,
      'trap_coping' => $request->trap_coping,
      'trap_coping_short' => $request->trap_coping_short,
      'trap_coping_long' => $request->trap_coping_long,
      'trac_res' => $request->trac_res,
    ]);
    $trap_trac->save();
    $trap_tracs = Trap_trac::paginate(1);
    return view('trap_trac', compact('trap_tracs'));
  }
  public function list_trap_trac()
  {
    $trap_tracs = Trap_trac::paginate(1);
    return view('trap_trac', compact('trap_tracs'));
  }

  public function insert_automatic(Request $request)
  {
    $automatic = new Automatic_thinking();
    $automatic->environment = $request->environment;
    $automatic->thoughts_images = $request->thoughts_images;
    $automatic->emotions_mood = $request->emotions_mood;
    $automatic->body_reaction = $request->body_reaction;
    $automatic->action = $request->action;
    $automatic->fill([
      'environment' => $request->environment,
      'thoughts_images' => $request->thoughts_images,
      'emotions_mood' => $request->emotions_mood,
      'body_reaction' => $request->body_reaction,
      'action' => $request->action,
    ]);
    $automatic->save();
    $automatics = Automatic_thinking::paginate(1);
    return view('automatic_thinking', compact('automatics'));
  }
  public function list_automatic()
  {
    $automatics = Automatic_thinking::paginate(1);
    return view('automatic_thinking', compact('automatics'));
  }

  public function insert_act_value(Request $request)
  {
    $act_value = new act_value();
    $act_value->importance = $request->importance;
    $act_value->success = $request->success;
    $act_value->explanation = $request->explanation;
    $act_value->fill([
      'importance' => $request->importance,
      'success' => $request->success,
      'explanation' => $request->explanation,
    ]);
    $act_value->save();
    $act_values = act_value::paginate(1);
    return view('act_value', compact('act_values'));
  }
  public function list_act_value()
  {
    $act_values = act_value::paginate(1);
    return view('act_value', compact('act_values'));
  }

  public function index(Request $request)
  {
    return view('index', ['data' => $request->data]);
  }
}
