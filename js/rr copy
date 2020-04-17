	(function(){
	var settings = {
	    pause: false,
	    notifications: true,
	    towar: 'bombarder',
	    buy: 'bombarder',
	    buyings: {
	        tank: 4000,
	        topol: 45,
	        bombarder: 51
	    },
	    skill: 'endurance',
	    logging: false
	};
	var work = {
	        get tab(){
	            return document.querySelector('#header_menu .work_menu');
	        },
	        get goBtn(){
	            return document.querySelector('#content .work_factory_button');
	        },
	        get energySelect(){
	            var e = document.querySelector('#content #work_xtimes_f .dd-options');
	            return e.children[e.children.length-1].querySelector('a.dd-option');
	        }
	    },
	    storage = {
	        get tab(){
	            return document.querySelector('#header_menu .storage_menu');
	        },
	        element: {
	            energy: {
	                get market(){
	                    return document.querySelector('#content .storage_item[url="17"]');
	                },
	                get buyField(){
	                    return document.querySelector('#storage_market input.storage_produce_ammount');
	                },
	                get buyBtn(){
	                    return document.querySelector('#storage_market .storage_produce_button');
	                }
	            },
	            tank: {
	                get market(){
	                    return document.querySelector('#content .storage_item[url="2"]');
	                },
	                get buyField(){
	                    return document.querySelector('#storage_market input.storage_buy_input');
	                },
	                get buyBtn(){
	                    return document.querySelector('#storage_market .storage_buy_button');
	                }
	            },
	            topol: {
	                get market(){
	                    return document.querySelector('#content .storage_item[url="14"]');
	                },
	                get buyField(){
	                    return document.querySelector('#storage_market input.storage_buy_input');
	                },
	                get buyBtn(){
	                    return document.querySelector('#storage_market .storage_buy_button');
	                }
	            },
	            bombarder: {
	                get market(){
	                    return document.querySelector('#content .storage_item[url="16"]');
	                },
	                get buyField(){
	                    return document.querySelector('#storage_market input.storage_buy_input');
	                },
	                get buyBtn(){
	                    return document.querySelector('#storage_market .storage_buy_button');
	                }
	            }
	        }
	    },
	    wars = {
	        get tab(){
	            return document.querySelector('#header_menu .wars_menu');
	        },
	        get trainingBtn(){
	            return document.querySelector('.war_index_war .war_4_start');
	        },
	        get oneHourAlert(){
	            // > div > Надішліть війська і ваша Енергія не зменшиться!
	            return document.querySelector('#header_slide .war_w_send .hide_once_war');
	        },
	        get sendEnemies(){
	            return document.querySelector('#header_slide #send_b_wrap .war_w_send_ok');
	        },

	        useUnit: function(unit){
	            var unitImg = {
	                    tank: 'static.rivalregions.com/static/images/icons/white/storage_2.png',
	                    topol: '', // ????
	                    bombarder: 'static.rivalregions.com/static/images/icons/white/storage_16.png'
	                },
	                units = document.querySelectorAll('#header_slide .war_w_send .war_select_u .war_w_unit');
	            for(var i=0; i<units.length; i++){
	                var st = units[i].getAttribute('style');
	                if(st && st.match(unitImg[unit])){
	                    units[i].querySelector('.war_w_unit_div').click();
	                    break;
	                }
	            }
	        }
	    },
	    index = {
	        get tab(){
	            return document.querySelector('#header_menu .index_menu');
	        }
	    },
	    user = {
	        get energy(){
	            return parseInt(document.getElementById('s').innerText,10);
	        },
	        get fillEnergyBtn(){
	            return document.getElementById('header_my_fill_bar');
	        }
	    },
	    skills = {
	    	takeSkill: function(skill){
	    		var s = {
		    			endurance: '[perk="3"]',
		    			knowledge: '[perk="2"]',
		    			power: '[perk="1"]'
		    		},
	    			ss = document.querySelector('#index_perks_list .perk_item'+s[skill]);
				return ss;
	    	},
	    	get moneyBtn(){
	    		return document.querySelector('#index_perks_t #perk_target_4 .perk_select');
	    	}
	    },
	    logo = {
	        get item(){
	            return document.querySelector('.header_logo_inner');
	        }
	    },
	    CycleOrder=[],
	    Lock = false,
	    LockReload = false;

	function setNotification(){
	    var n = document.createElement('div');
	    n.setAttribute('style','position:fixed;z-index:9999;top:15px;left:15px;background: #A00000;color:#fff;font-weight:700;cursor:pointer;padding:10px 15px;font-size:16px;border-radius:7px;box-shadow:0 0 10px #000;');
	    n.innerText = 'click to Allow Notifications';
	    document.body.appendChild(n);
	    n.onclick = function(){
	        Notification.requestPermission().then(function (permission) {
	            if (permission === "granted") {
	                n.parentNode.removeChild(n);
	                var notification = new Notification('Notifications are allowed now');
	            }
	        });
	    };
	}
	function notify(title,text) {
	    if (!("Notification" in window)) {
	        console.error("This browser does not support desktop notification");
	    } else if (Notification.permission === "granted") {
	        var notification = new Notification(title,{body:text});
	    } else if (Notification.permission !== "denied") {
	        settings.notifications && setNotification();
	    }
	}

	//time in ms
	function cycle(time){
	    setTimeout(function(){
	        if(CycleOrder[0] && typeof CycleOrder[0] === 'function'){
	            try{
	                CycleOrder[0]();
	            }catch(e){}
	            CycleOrder.splice(0,1);
	        }
	        cycle(time);
	    },time);
	}
	cycle(3000);

	var G_fillEnergy = 0;

	// time in ms
	function goldMining(time){
	    setTimeout(function(){
	        if(settings.pause){
	            goldMining(60000);
	            return false;
	        }
	        settings.logging && console.info('Check for goldMining...');
	        if(!Lock && user.energy >= 10){
	            Lock = true;
	            LockReload = true;
	            settings.logging && console.info('goldMining to order');
	            G_fillEnergy = Math.ceil((200 - user.energy)/10)*10;
	            // G_fillEnergy = Math.ceil((200 - user.energy)/2/10)*10;
	            user.fillEnergyBtn.click();
	            settings.logging && console.log('Fill energy at: '+G_fillEnergy);
	            CycleOrder.push(function(){
	                notify('Run goldMining','Go to gold works');
	                settings.logging && console.info('Run goldMining');
	                settings.logging && console.log('Go to gold works');
	                work.tab.click();
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Use Maximum energy');
	                work.energySelect.click(); // last (200E)
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('WORK HARD');
	                work.goBtn.click();
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Go to storage');
	                storage.tab.click();
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Open Energy market');
	                storage.element.energy.market.click();
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Set '+G_fillEnergy+'E for buying');
	                storage.element.energy.buyField.value = G_fillEnergy;
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Buy '+G_fillEnergy+'E');
	                storage.element.energy.buyBtn.click();
	                G_fillEnergy = 0;
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Open '+settings.buy+' market');
	                storage.element[settings.buy].market.click();
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Set '+settings.buyings[settings.buy]+' '+settings.buy+' for buying');
	                storage.element[settings.buy].buyField.value = settings.buyings[settings.buy];
	            });
	            CycleOrder.push(function(){
	                settings.logging && console.log('Buy '+settings.buyings[settings.buy]+' '+settings.buy+'s');
	                storage.element[settings.buy].buyBtn.click();
	                settings.logging && console.log('End goldMining Cycle =)');
	                LockReload = false;
	            });
	            Lock = false;
	            goldMining(600000);
	        }else{
	            settings.logging && console.log('Not Yet!');
	            notify('goldMining Not Yet!','Go to overview');
	            !Lock && !LockReload && index.tab.click();
	            goldMining(60000);
	        }
	    },time);
	}
	goldMining(5000);


	function enemyTraining(time){
	    setTimeout(function(){
	        if(settings.pause){
	            enemyTraining(60000);
	            return false;
	        }
	        if(!Lock){
	            Lock = true;
	            settings.logging && console.info('Check Enemy train');
	            CycleOrder.push(function(){
	                if(window.location.hash !== '#overview'){
	                	notify('Check Enemy train.','Go to index');
	                	index.tab.click();
	                }
	            });
	            CycleOrder.push(function(){
	                LockReload = true;
	                var countdown = document.querySelector('.index_wars .war_index_war .war_index_war_countdown');
	                if(countdown.classList.contains('hasCountdown') && countdown.innerText !== '00:00'){
	                	settings.logging && console.log('Not Yet!');
	                	notify('enemyTraining Not Yet!','Go to overview.');
	                	Lock = false;
		                LockReload = false;
		                enemyTraining(60000);
	                }else{
	                	CycleOrder.push(function(){
		                	notify('Check Enemy train.','Go to wars');
			                settings.logging && console.log('Go to wars');
			                wars.tab.click();
			            });
			            CycleOrder.push(function(){
			                settings.logging && console.log('Go to enemies training');
			                wars.trainingBtn.click();
			            });
			            CycleOrder.push(function(){
			                settings.logging && console.log('Check free enemy training message');
			                if(wars.oneHourAlert.innerText === 'Надішліть війська і ваша Енергія не зменшиться!'){
			                    wars.useUnit(settings.towar);
			                    settings.logging && console.info('Send enemies for training');
			                    wars.sendEnemies.click();
			                    index.tab.click();
			                    enemyTraining(60*60000);
			                }else{
			                    settings.logging && console.log('Not Yet!');
			                    notify('enemyTraining Not Yet!','Go to overview.');
			                    index.tab.click();
			                    enemyTraining(60000);
			                }
			                Lock = false;
			                LockReload = false;
			            });
	                }
	            });
	        }else{
	            enemyTraining(5*60000);
	        }
	    },time);
	}
	enemyTraining(6000);

	function checkAcademy(time){
	    setTimeout(function(){
	        if(settings.pause){
	            checkAcademy(time);
	            return false;
	        }
	        if(Lock){
	            checkAcademy(60000);
	        }else{
	            Lock = true;
	            settings.logging && console.info('Check Academy time');
	            CycleOrder.push(function(){
	                LockReload = true;
	                notify('Check Academy build','Go to index');
	                if(window.location.hash !== '#overview'){
	                	index.tab.click();
	                }
	            });
	            CycleOrder.push(function(){
	                var questBtn = document.querySelector('.quest_have_perk_ma');
	                questBtn.click();
	            });
	            CycleOrder.push(function(){
	                var buildBtn = document.querySelector('.index_ma_quest');
	                buildBtn.click();
	            });
	            CycleOrder.push(function(){
	                var timer = document.querySelector('#header_slide_inner .hasCountdown');
	                if(!timer){
	                    settings.logging && console.info('Time to build Academy!');
	                    notify('Time to build Academy!');
	                }else{
	                    settings.logging && console.log('Not Yet!');
	                    notify('Academy Buildings Not Yet!','Go to overview.');
	                    index.tab.click();
	                }
	              checkAcademy(5*60000);
	                LockReload = false;
	                Lock = false;
	            });
	        }
	    },time);
	}
	checkAcademy(5*60000);

	function checkSkills(time){
	    setTimeout(function() {
	        if (settings.pause) {
	            checkSkills(time);
	            return false;
	        }
	        if(Lock){
	            checkSkills(60000);
	        }else{
	            Lock = true;
	            settings.logging && console.info('Check Skills');
	            CycleOrder.push(function(){
	                LockReload = true;
	                notify('Check Skills','Go to index');
	                if(window.location.hash !== '#overview'){
	                	index.tab.click();
	                }
	            });
	            CycleOrder.push(function(){
	                if(document.querySelector('#index_perks_list .hasCountdown')){
	                    settings.logging && console.log('Skills still upgreading');
	                }else{
	                    settings.logging && console.info('All skills are upgraded');
	                    notify('All skills are upgraded','Try to next');
	                    if(settings.skill){
	                    	notify('Upgrade '+settings.skill+' skill','');
	                    	upgrade();
	                    }
	                }
	              checkSkills(5*60000);
	              LockReload = false;
	            });
	            Lock = false;
	        }
	    },time);
	}
	checkSkills(5*60000);

	function upgrade(){
		CycleOrder.push(function(){
	        notify('Upgrade',settings.skill);
	        skills.takeSkill(settings.skill).click();
	    });
	    CycleOrder.push(function(){
	        skills.moneyBtn.click();
	    });
	}


	})();