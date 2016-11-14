#!/bin/sh

tmux start-server
tmux new-session -d -s dojo -n code
tmux new-window -tdojo:0 -n code
tmux split-window -tdojo:0 -p 50 -h
tmux new-window -tdojo:1 -n beaker
tmux new-window -tdojo:2 -n ssh

tmux send-keys -tdojo:0 'cd .; clear' C-m
tmux send-keys -tdojo:1 'cd .; clear' C-m
tmux send-keys -tdojo:2 'cd .; clear' C-m

tmux select-window -tdojo:0
tmux attach-session -d -tdojo
