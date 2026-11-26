<?php
$pageTitle = 'Sudoku Bamboo Puzzle';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#173524">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- Animated leaves for the outer forest background (kept behind the app panel). -->
    <div class="outer-falling-leaves" aria-hidden="true">
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
        <span class="outer-leaf"></span><span class="outer-leaf"></span>
    </div>
    <div class="app-shell">
        <main id="homeScreen" class="screen active home-screen" aria-label="Main menu">
            <div class="forest-scene" aria-hidden="true">
                <div class="forest-glow"></div>
                <div class="fireflies"><i></i><i></i><i></i><i></i><i></i></div>
            </div>
            <div class="outer-bamboo-vine-frame" aria-hidden="true"><span class="outer-bamboo-vine-left"></span><span
                    class="outer-bamboo-vine-right"></span></div>
            <div class="home-vine-art" aria-hidden="true"></div>
            <div class="brand" aria-label="Sudoku Wood Puzzle">
                <div class="brand-title"><span class="letter blue">S</span><span class="letter pink">U</span><span
                        class="letter green">D</span><span class="letter orange">O</span><span
                        class="letter lime">K</span><span class="letter cyan">U</span></div>
                <div class="brand-sub">BAMBOO PUZZLE</div>
                <div class="brand-vine">✦ ❧ ✦</div>
                <div class="creator-credit">
                    <span class="credit-vine left-vine">❧</span>
                    <span class="credit-text">CREATED BY KENT</span>
                    <span class="credit-vine right-vine">❧</span>
                </div>

            </div>
            <button class="home-mode" id="homeModeBtn" type="button"><small>MODE</small><span
                    id="homeModeLabel">EASY</span><b></b></button>
            <button class="wood-button play-button" id="playBtn" type="button"><span class="green-face">▶
                    PLAY</span>
            </button>

            <button class="wood-button achievement-button" id="achievementBtn" type="button">
                <span class="achievement-face">🏆 ACHIEVEMENTS</span>
            </button>
            <button class="home-settings-link" id="settingsBtn" type="button">⚙ SETTINGS</button>
            <button class="home-exit-link" id="homeExitBtn" type="button">⏻ QUIT</button>
            <div class="home-bottom-glow"></div>
        </main>
        <main id="loadingScreen" class="screen loading-screen" aria-label="Loading game" aria-live="polite">
            <div class="forest-scene" aria-hidden="true">
                <div class="forest-glow"></div>
                <div class="fireflies"><i></i><i></i><i></i><i></i></div>
            </div>
            <div class="outer-bamboo-vine-frame" aria-hidden="true"><span class="outer-bamboo-vine-left"></span><span
                    class="outer-bamboo-vine-right"></span></div>
            <div class="brand loading-brand">
                <div class="brand-title"><span class="letter blue">S</span><span class="letter pink">U</span><span
                        class="letter green">D</span><span class="letter orange">O</span><span
                        class="letter lime">K</span><span class="letter cyan">U</span></div>
                <div class="brand-sub">WOOD PUZZLE</div>
                <div class="brand-vine">✦ ❧ ✦</div>
            </div>
            <div class="loading-content">
                <div class="loading-message" id="loadingMessage">Awakening the forest…</div>
                <div class="loading-track" role="progressbar" aria-label="Loading puzzle" aria-valuemin="0"
                    aria-valuemax="100" aria-valuenow="0" id="loadingTrack">
                    <div class="loading-fill" id="loadingFill"><span id="loadingPercent">0%</span></div>
                </div>
                <div class="loading-caption" id="loadingCaption">PLEASE WAIT</div>
            </div>
        </main>
        <main id="modeScreen" class="screen mode-screen" aria-label="Select difficulty">
            <div class="forest-scene" aria-hidden="true">
                <div class="forest-glow"></div>
            </div>
            <div class="outer-bamboo-vine-frame" aria-hidden="true"><span class="outer-bamboo-vine-left"></span><span
                    class="outer-bamboo-vine-right"></span></div>
            <button class="back-button" id="backHomeBtn" aria-label="Back to main menu" type="button">‹</button>
            <h1 class="screen-heading">SELECT MODE</h1>
            <div class="mode-list"><button class="wood-button mode-btn easy" data-mode="Easy"
                    type="button"><span>Easy</span></button><button class="wood-button mode-btn medium"
                    data-mode="Medium" type="button"><span>Medium</span></button><button
                    class="wood-button mode-btn hard" data-mode="Hard" type="button"><span>Hard</span></button><button
                    class="wood-button mode-btn expert" data-mode="Expert" type="button"><span>Expert</span></button>
            </div>
        </main>
        <main id="pauseScreen" class="screen pause-screen" aria-label="Game paused">
            <div class="forest-scene" aria-hidden="true">
                <div class="forest-glow"></div>
            </div>
            <div class="outer-bamboo-vine-frame" aria-hidden="true"><span class="outer-bamboo-vine-left"></span><span
                    class="outer-bamboo-vine-right"></span></div>
            <h1 class="screen-heading">GAME PAUSED</h1>
            <div class="pause-list">
                <button class="wood-button pause-option green-option" id="resumeBtn"
                    type="button"><span>Resume</span></button>
                <button class="wood-button pause-option restart-option" id="restartBtn" type="button"
                    title="Restart current puzzle" aria-label="Restart current puzzle"><span>↻ Restart</span></button>
                <button class="wood-button pause-option teal-option" id="pauseSettingsBtn"
                    type="button"><span>Settings</span></button>
                <button class="wood-button pause-option pink-option" id="exitBtn"
                    type="button"><span>Exit</span></button>
            </div>
        </main>
        <main id="settingsScreen" class="screen settings-screen" aria-label="Settings">
            <div class="forest-scene" aria-hidden="true">
                <div class="forest-glow"></div>
            </div>
            <div class="outer-bamboo-vine-frame" aria-hidden="true"><span class="outer-bamboo-vine-left"></span><span
                    class="outer-bamboo-vine-right"></span></div><button class="back-button settings-back"
                id="settingsBackBtn" aria-label="Back" type="button">×</button>
            <h1 class="settings-heading">SETTINGS</h1>
            <div class="settings-list">
                <button class="setting-row" data-setting="sound" type="button">
                    <span>
                        <b>Sound FX</b>
                        <small>All sound and music on/off</small>
                    </span>
                    <i class="setting-toggle on">✓</i>
                </button>

                <div class="volume-control fx-volume-control">
                    <input type="range" id="soundVolume" min="0" max="100" value="70" aria-label="Sound effects volume">
                </div>

                <div class="volume-control background-volume-control">
                    <div class="background-volume-heading">
                        <label for="backgroundVolume">BACKGROUND SOUND</label>
                        <output id="backgroundVolumeValue" for="backgroundVolume">35%</output>
                    </div>
                    <input type="range" id="backgroundVolume" min="0" max="100" value="35"
                        aria-label="Background music volume">
                    <div class="background-volume-hints">
                        <span>Muted</span>
                        <span>Full volume</span>
                    </div>
                </div>

                <button class="setting-row" data-setting="duplicates" type="button">
                    <span>
                        <b>Highlight Duplicate</b>
                        <small>Highlight repeating numbers in row, column and block.</small>
                    </span>
                    <i class="setting-toggle">×</i>
                </button>

                <button class="setting-row" data-setting="identical" type="button">
                    <span>
                        <b>Highlight Identical Numbers</b>
                        <small>Highlight matching numbers when a cell is selected.</small>
                    </span>
                    <i class="setting-toggle on">✓</i>
                </button>

                <button class="setting-row" data-setting="notes" type="button">
                    <span>
                        <b>Auto Remove Notes</b>
                        <small>Remove notes from related cells when a number is placed.</small>
                    </span>
                    <i class="setting-toggle">×</i>
                </button>
            </div>
        </main>
        <main id="gameScreen" class="screen game-screen" aria-label="Sudoku game">
            <div class="forest-scene game-forest" aria-hidden="true">
                <div class="forest-glow"></div>
            </div>
            <div class="outer-bamboo-vine-frame" aria-hidden="true"><span class="outer-bamboo-vine-left"></span><span
                    class="outer-bamboo-vine-right"></span></div>
            <header class="game-topbar"><button class="control-btn" id="pauseBtn" title="Pause" type="button">Ⅱ</button>
                <button class="record-trophy-btn" id="recordTrophyBtn" type="button" title="View personal best times"
                    aria-label="View personal best times">
                    <span class="record-trophy-icon" aria-hidden="true">🏆</span>
                    <span class="record-trophy-caption">BEST</span>
                    <span class="record-trophy-time" id="recordTrophyTime">--:--</span>
                    <span class="record-trophy-note" id="recordTrophyNote" aria-live="polite">NEW RECORD!</span>
                </button>
                <div class="timer"><span id="timerText">00:00</span></div><button class="control-btn settings-control"
                    id="gameSettingsBtn" title="Settings" type="button">⚙</button>
            </header>
            <section class="stats-panel" aria-label="Game stats">
                <div class="stat"><span class="stat-label">FILLED</span><strong id="filledCount">0/81</strong></div>
                <div class="stat-divider"></div>
                <div class="stat"><span class="stat-label">MISTAKES</span><strong id="mistakesCount">0</strong></div>
                <div class="stat-divider"></div>
                <div class="stat progress-stat"><span class="stat-label">PROGRESS</span><strong
                        id="progressPercent">0%</strong></div>
                <div class="progress-track">
                    <div id="progressFill" class="progress-fill"></div>
                </div>
            </section>
            <div class="difficulty-chip" id="difficultyLabel">EASY</div>
            <section class="board-wrap">
                <div class="board-frame">
                    <div id="sudokuBoard" class="sudoku-board" role="grid" aria-label="Sudoku grid"></div>
                    <div class="board-vine-art" aria-hidden="true"></div>
                </div>
            </section>
            <div class="selected-info" id="selectedInfo">Select a cell, then choose a number</div>
            <div class="number-pad" id="numberPad" aria-label="Number pad"></div>
            <div class="game-actions"><button id="eraseBtn" class="action-btn" type="button">⌫
                    <small>ERASE</small></button><button id="hintBtn" class="action-btn" type="button">✦
                    <small>HINT</small></button><button id="checkBtn" class="action-btn" type="button">✓
                    <small>CHECK</small></button></div>
        </main>
        <div class="scene-intro" id="sceneIntro" hidden aria-live="polite" aria-atomic="true">
            <div class="scene-intro-card">
                <span class="scene-intro-leaf scene-intro-leaf-left">❧</span>
                <div class="scene-intro-kicker">BAMBOO FOREST</div>
                <div class="scene-intro-title" id="sceneIntroTitle">WELCOME</div>
                <div class="scene-intro-subtitle" id="sceneIntroSubtitle">YOUR PUZZLE ADVENTURE BEGINS</div>
                <span class="scene-intro-leaf scene-intro-leaf-right">❧</span>
            </div>
        </div>
    </div>
    <div class="modal-backdrop" id="modalBackdrop" hidden>
        <section class="modal wood-modal" id="modalBox" role="dialog" aria-modal="true"><button class="modal-close"
                id="modalClose" aria-label="Close" type="button">×</button>
            <div id="modalContent"></div>
        </section>
    </div>
    <audio id="backgroundMusic" src="assets/audio/background-forest.mp3" autoplay loop preload="auto" playsinline
        aria-hidden="true"></audio>
    <script src="assets/app.js"></script>
</body>

</html>